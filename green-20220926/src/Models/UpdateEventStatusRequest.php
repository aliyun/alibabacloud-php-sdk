<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class UpdateEventStatusRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string[]
     */
    public $eventIds;

    /**
     * @var string
     */
    public $operationCode;

    /**
     * @var string
     */
    public $operationParams;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'appId' => 'AppId',
        'eventIds' => 'EventIds',
        'operationCode' => 'OperationCode',
        'operationParams' => 'OperationParams',
        'regionId' => 'RegionId',
        'source' => 'Source',
    ];

    public function validate()
    {
        if (\is_array($this->eventIds)) {
            Model::validateArray($this->eventIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->eventIds) {
            if (\is_array($this->eventIds)) {
                $res['EventIds'] = [];
                $n1 = 0;
                foreach ($this->eventIds as $item1) {
                    $res['EventIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
        }

        if (null !== $this->operationParams) {
            $res['OperationParams'] = $this->operationParams;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['EventIds'])) {
            if (!empty($map['EventIds'])) {
                $model->eventIds = [];
                $n1 = 0;
                foreach ($map['EventIds'] as $item1) {
                    $model->eventIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }

        if (isset($map['OperationParams'])) {
            $model->operationParams = $map['OperationParams'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
