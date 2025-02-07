<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetManagedTransformResponseBody extends Model
{
    /**
     * @var string
     */
    public $addClientGeolocationHeader;
    /**
     * @var string
     */
    public $addRealClientIpHeader;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'addClientGeolocationHeader' => 'AddClientGeolocationHeader',
        'addRealClientIpHeader'      => 'AddRealClientIpHeader',
        'requestId'                  => 'RequestId',
        'siteVersion'                => 'SiteVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addClientGeolocationHeader) {
            $res['AddClientGeolocationHeader'] = $this->addClientGeolocationHeader;
        }

        if (null !== $this->addRealClientIpHeader) {
            $res['AddRealClientIpHeader'] = $this->addRealClientIpHeader;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
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
        if (isset($map['AddClientGeolocationHeader'])) {
            $model->addClientGeolocationHeader = $map['AddClientGeolocationHeader'];
        }

        if (isset($map['AddRealClientIpHeader'])) {
            $model->addRealClientIpHeader = $map['AddRealClientIpHeader'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        return $model;
    }
}
