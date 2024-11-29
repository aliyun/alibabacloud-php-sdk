<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionRequest;

use AlibabaCloud\Tea\Model;

class managedTransforms extends Model
{
    /**
     * @description Specifies whether to include the header that indicates the geographical location of a client in an origin request. Valid values:
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
     * @description Specifies whether to include the "ali-real-client-ip" header that contains the client\\"s real IP address in an origin request. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $addRealClientIpHeader;
    protected $_name = [
        'addClientGeolocationHeaders' => 'AddClientGeolocationHeaders',
        'addRealClientIpHeader'       => 'AddRealClientIpHeader',
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

        return $model;
    }
}
