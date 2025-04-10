<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentSelectiveRequest\applicationConfig;

use AlibabaCloud\Dara\Model;

class historyConfig extends Model
{
    /**
     * @var bool
     */
    public $enableAdbRecord;

    /**
     * @var bool
     */
    public $enableRecord;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $storeCode;
    protected $_name = [
        'enableAdbRecord' => 'enableAdbRecord',
        'enableRecord' => 'enableRecord',
        'instanceId' => 'instanceId',
        'region' => 'region',
        'storeCode' => 'storeCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableAdbRecord) {
            $res['enableAdbRecord'] = $this->enableAdbRecord;
        }

        if (null !== $this->enableRecord) {
            $res['enableRecord'] = $this->enableRecord;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->storeCode) {
            $res['storeCode'] = $this->storeCode;
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
        if (isset($map['enableAdbRecord'])) {
            $model->enableAdbRecord = $map['enableAdbRecord'];
        }

        if (isset($map['enableRecord'])) {
            $model->enableRecord = $map['enableRecord'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['storeCode'])) {
            $model->storeCode = $map['storeCode'];
        }

        return $model;
    }
}
