<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\refundDetails;

use AlibabaCloud\Dara\Model;

class extraContents extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'content' => 'content',
        'icon' => 'icon',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['icon'])) {
            $model->icon = $map['icon'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
