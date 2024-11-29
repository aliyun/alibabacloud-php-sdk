<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs;

use AlibabaCloud\Tea\Model;

class managedTransforms extends Model
{
    /**
     * @description Indicates whether the header that indicates the geographical location of a client is included in an origin request. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $addClientGeolocationHeaders;

    /**
     * @description Indicates whether the "ali-real-client-ip" header that contains the client\\"s real IP address is included in an origin request. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $addRealClientIpHeader;

    /**
     * @description The configuration ID.
     *
     * @example 352816096987136
     *
     * @var int
     */
    public $configId;

    /**
     * @description The order in which the rule is executed.
     *
     * @example 1
     *
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
