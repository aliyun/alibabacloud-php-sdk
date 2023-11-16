<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class CostCenterQueryRequest extends Model
{
    /**
     * @var int
     */
    public $disable;

    /**
     * @example false
     *
     * @var bool
     */
    public $needOrgEntity;

    /**
     * @example cost1
     *
     * @var string
     */
    public $thirdpartId;

    /**
     * @var string
     */
    public $title;

    /**
     * @example user1
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'disable'       => 'disable',
        'needOrgEntity' => 'need_org_entity',
        'thirdpartId'   => 'thirdpart_id',
        'title'         => 'title',
        'userId'        => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disable) {
            $res['disable'] = $this->disable;
        }
        if (null !== $this->needOrgEntity) {
            $res['need_org_entity'] = $this->needOrgEntity;
        }
        if (null !== $this->thirdpartId) {
            $res['thirdpart_id'] = $this->thirdpartId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CostCenterQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['disable'])) {
            $model->disable = $map['disable'];
        }
        if (isset($map['need_org_entity'])) {
            $model->needOrgEntity = $map['need_org_entity'];
        }
        if (isset($map['thirdpart_id'])) {
            $model->thirdpartId = $map['thirdpart_id'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
