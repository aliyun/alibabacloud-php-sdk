<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class SaveWebHostingCustomDomainCorsConfigRequest extends Model
{
    /**
     * @example https://*.example.com, https://*.example.org
     *
     * @var string
     */
    public $accessControlAllowOrigin;

    /**
     * @var bool
     */
    public $accessOriginControl;

    /**
     * @example www.example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableCors;

    /**
     * @example 226e5213-697c-4a52-b4ff-35a09f8*****
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'accessControlAllowOrigin' => 'AccessControlAllowOrigin',
        'accessOriginControl'      => 'AccessOriginControl',
        'domainName'               => 'DomainName',
        'enableCors'               => 'EnableCors',
        'spaceId'                  => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessControlAllowOrigin) {
            $res['AccessControlAllowOrigin'] = $this->accessControlAllowOrigin;
        }
        if (null !== $this->accessOriginControl) {
            $res['AccessOriginControl'] = $this->accessOriginControl;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->enableCors) {
            $res['EnableCors'] = $this->enableCors;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveWebHostingCustomDomainCorsConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessControlAllowOrigin'])) {
            $model->accessControlAllowOrigin = $map['AccessControlAllowOrigin'];
        }
        if (isset($map['AccessOriginControl'])) {
            $model->accessOriginControl = $map['AccessOriginControl'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EnableCors'])) {
            $model->enableCors = $map['EnableCors'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
