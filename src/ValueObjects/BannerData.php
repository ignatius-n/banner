<?php

namespace Kenepa\Banner\ValueObjects;

class BannerData
{
    public function __construct(
        public string $id,
        public string $name,
        public string $content,
        public bool $is_active,
        public ?string $active_since,
        public ?string $icon,
        public string $background_type,
        public string $start_color,
        public ?string $end_color,
        public ?string $start_time,
        public ?string $end_time,
        public bool $can_be_closed_by_user,
        public ?string $text_color,
        public ?string $icon_color,
        public ?string $render_location,
        public ?array $scope,
        public ?string $link_url,
        public ?string $link_text,
        public ?string $link_click_action,
        public ?string $link_button_style,
        public ?string $link_button_color,
        public ?string $link_text_color,
        public ?string $link_active,
        public ?bool $link_open_in_new_tab,
        public ?string $link_button_icon,
        public ?string $link_button_icon_color,
    ) {
    }

    public static function fromArray(array $data): BannerData
    {
        return new static(
            $data['id'],
            $data['name'],
            $data['content'],
            $data['is_active'],
            $data['active_since'] ?? null,
            $data['icon'],
            $data['background_type'],
            $data['start_color'],
            $data['end_color'] ?? null,
            $data['start_time'],
            $data['end_time'],
            $data['can_be_closed_by_user'],
            $data['text_color'] ?? null,
            $data['icon_color'] ?? null,
            $data['render_location'] ?? null,
            $data['scope'] ?? null,
            $data['link_url'] ?? null,
            $data['link_text'] ?? null,
            $data['link_click_action'] ?? null,
            $data['link_button_style'] ?? null,
            $data['link_button_color'] ?? null,
            $data['link_text_color'] ?? null,
            $data['link_active'] ?? null,
            $data['link_open_in_new_tab'] ?? null,
            $data['link_button_icon'] ?? null,
            $data['link_button_icon_color'] ?? null,
        );
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'content' => $this->content,
            'is_active' => $this->is_active,
            'active_since' => $this->active_since,
            'icon' => $this->icon,
            'background_type' => $this->background_type,
            'start_color' => $this->start_color,
            'end_color' => $this->end_color,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'can_be_closed_by_user' => $this->can_be_closed_by_user,
            'text_color' => $this->text_color,
            'icon_color' => $this->icon_color,
            'render_location' => $this->render_location,
            'scope' => $this->scope,
            'link_url' => $this->link_url,
            'link_text' => $this->link_text,
            'link_click_action' => $this->link_click_action,
            'link_button_style' => $this->link_button_style,
            'link_button_color' => $this->link_button_color,
            'link_text_color' => $this->link_text_color,
            'link_active' => $this->link_active,
            'link_open_in_new_tab' => $this->link_open_in_new_tab,
            'link_button_icon' => $this->link_button_icon,
            'link_button_icon_color' => $this->link_button_icon_color,
        ];
    }
}
