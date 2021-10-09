<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\PutConfigurationRecorderResponseBody;

use AlibabaCloud\Tea\Model;

class configurationRecorder extends Model
{
    /**
     * @var string
     */
    public $configurationRecorderStatus;

    /**
     * @var int
     */
    public $accountId;

    /**
     * @var string[]
     */
    public $resourceTypes;
    protected $_name = [
        'configurationRecorderStatus' => 'ConfigurationRecorderStatus',
        'accountId'                   => 'AccountId',
        'resourceTypes'               => 'ResourceTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configurationRecorderStatus) {
            $res['ConfigurationRecorderStatus'] = $this->configurationRecorderStatus;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configurationRecorder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigurationRecorderStatus'])) {
            $model->configurationRecorderStatus = $map['ConfigurationRecorderStatus'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ResourceTypes'])) {
            if (!empty($map['ResourceTypes'])) {
                $model->resourceTypes = $map['ResourceTypes'];
            }
        }

        return $model;
    }
}
