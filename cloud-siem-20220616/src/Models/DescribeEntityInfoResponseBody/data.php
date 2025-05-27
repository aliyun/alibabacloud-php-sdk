<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeEntityInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $entityId;

    /**
     * @var mixed[]
     */
    public $entityInfo;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var mixed[]
     */
    public $tipInfo;
    protected $_name = [
        'entityId' => 'EntityId',
        'entityInfo' => 'EntityInfo',
        'entityType' => 'EntityType',
        'tipInfo' => 'TipInfo',
    ];

    public function validate()
    {
        if (\is_array($this->entityInfo)) {
            Model::validateArray($this->entityInfo);
        }
        if (\is_array($this->tipInfo)) {
            Model::validateArray($this->tipInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->entityInfo) {
            if (\is_array($this->entityInfo)) {
                $res['EntityInfo'] = [];
                foreach ($this->entityInfo as $key1 => $value1) {
                    $res['EntityInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->tipInfo) {
            if (\is_array($this->tipInfo)) {
                $res['TipInfo'] = [];
                foreach ($this->tipInfo as $key1 => $value1) {
                    $res['TipInfo'][$key1] = $value1;
                }
            }
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
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['EntityInfo'])) {
            if (!empty($map['EntityInfo'])) {
                $model->entityInfo = [];
                foreach ($map['EntityInfo'] as $key1 => $value1) {
                    $model->entityInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['TipInfo'])) {
            if (!empty($map['TipInfo'])) {
                $model->tipInfo = [];
                foreach ($map['TipInfo'] as $key1 => $value1) {
                    $model->tipInfo[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
