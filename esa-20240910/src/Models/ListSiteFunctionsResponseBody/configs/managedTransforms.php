<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs;

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

    /**
     * @var string
     */
    public $sequence;
    protected $_name = [
        'addClientGeolocationHeaders' => 'AddClientGeolocationHeaders',
        'addRealClientIpHeader'       => 'AddRealClientIpHeader',
        'configId'                    => 'ConfigId',
        'sequence'                    => 'Sequence',
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
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
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
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        return $model;
    }
}
