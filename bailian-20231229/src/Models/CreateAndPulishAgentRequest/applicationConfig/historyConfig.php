<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\CreateAndPulishAgentRequest\applicationConfig;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return historyConfig
     */
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
