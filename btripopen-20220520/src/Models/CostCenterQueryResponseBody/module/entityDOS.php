<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\CostCenterQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class entityDOS extends Model
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
        'corpId' => 'corp_id',
        'entityId' => 'entity_id',
        'entityType' => 'entity_type',
        'name' => 'name',
        'userNum' => 'user_num',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
