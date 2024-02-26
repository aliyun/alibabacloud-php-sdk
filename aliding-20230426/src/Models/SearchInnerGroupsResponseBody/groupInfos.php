<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\SearchInnerGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class groupInfos extends Model
{
    /**
     * @example @lAD*****
     *
     * @var string
     */
    public $icon;

    /**
     * @example 10
     *
     * @var string
     */
    public $memberAmount;

    /**
     * @example cid13*****==
     *
     * @var string
     */
    public $openConversationId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'icon'               => 'Icon',
        'memberAmount'       => 'MemberAmount',
        'openConversationId' => 'OpenConversationId',
        'title'              => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return groupInfos
     */
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
