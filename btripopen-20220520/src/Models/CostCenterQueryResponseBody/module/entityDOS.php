<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class entityDOS extends Model
{
    /**
     * @example ding1234567
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 12345
     *
     * @var string
     */
    public $entityId;

    /**
     * @example 1
     *
     * @var string
     */
    public $entityType;

    /**
     * @example default_bus
     *
     * @var string
     */
    public $name;

    /**
     * @example 10
     *
     * @var int
     */
    public $userNum;
    protected $_name = [
        'corpId'     => 'corp_id',
        'entityId'   => 'entity_id',
        'entityType' => 'entity_type',
        'name'       => 'name',
        'userNum'    => 'user_num',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->entityId) {
            $res['entity_id'] = $this->entityId;
        }
        if (null !== $this->entityType) {
            $res['entity_type'] = $this->entityType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->userNum) {
            $res['user_num'] = $this->userNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entityDOS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }
        if (isset($map['entity_id'])) {
            $model->entityId = $map['entity_id'];
        }
        if (isset($map['entity_type'])) {
            $model->entityType = $map['entity_type'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['user_num'])) {
            $model->userNum = $map['user_num'];
        }

        return $model;
    }
}
