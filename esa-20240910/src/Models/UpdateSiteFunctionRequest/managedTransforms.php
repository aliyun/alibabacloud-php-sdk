<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteFunctionRequest;

use AlibabaCloud\Tea\Model;

class managedTransforms extends Model
{
    /**
     * @var string
     */
    public $addClientGeolocationHeaders;

    /**
     * @var string
     */
    public $addRealClientIpHeader;

    /**
     * @var int
     */
    public $configId;
    protected $_name = [
        'addClientGeolocationHeaders' => 'AddClientGeolocationHeaders',
        'addRealClientIpHeader'       => 'AddRealClientIpHeader',
        'configId'                    => 'ConfigId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addClientGeolocationHeaders) {
            $res['AddClientGeolocationHeaders'] = $this->addClientGeolocationHeaders;
        }
        if (null !== $this->addRealClientIpHeader) {
            $res['AddRealClientIpHeader'] = $this->addRealClientIpHeader;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return managedTransforms
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddClientGeolocationHeaders'])) {
            $model->addClientGeolocationHeaders = $map['AddClientGeolocationHeaders'];
        }
        if (isset($map['AddRealClientIpHeader'])) {
            $model->addRealClientIpHeader = $map['AddRealClientIpHeader'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        return $model;
    }
}
