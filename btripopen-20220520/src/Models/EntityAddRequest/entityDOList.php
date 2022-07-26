<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\EntityAddRequest;

use AlibabaCloud\Tea\Model;

class entityDOList extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $name;

    /**
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
     * @return entityDOList
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
