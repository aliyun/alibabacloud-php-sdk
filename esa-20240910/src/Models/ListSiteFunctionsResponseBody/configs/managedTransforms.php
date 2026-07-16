<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListSiteFunctionsResponseBody\configs;

use AlibabaCloud\Dara\Model;

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
        'addRealClientIpHeader' => 'AddRealClientIpHeader',
        'configId' => 'ConfigId',
        'sequence' => 'Sequence',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
