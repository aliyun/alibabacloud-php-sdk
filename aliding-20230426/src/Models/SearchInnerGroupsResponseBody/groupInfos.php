<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\SearchInnerGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class groupInfos extends Model
{
    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $memberAmount;

    /**
     * @var string
     */
    public $openConversationId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'icon' => 'Icon',
        'memberAmount' => 'MemberAmount',
        'openConversationId' => 'OpenConversationId',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }

        if (null !== $this->memberAmount) {
            $res['MemberAmount'] = $this->memberAmount;
        }

        if (null !== $this->openConversationId) {
            $res['OpenConversationId'] = $this->openConversationId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        if (isset($map['MemberAmount'])) {
            $model->memberAmount = $map['MemberAmount'];
        }

        if (isset($map['OpenConversationId'])) {
            $model->openConversationId = $map['OpenConversationId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
