<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class VerifyWebHostingDomainOwnerRequest extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 226e5213-697c-****-b4ff-35a09f8a52de
     *
     * @var string
     */
    public $spaceId;

    /**
     * @example dnsCheck
     *
     * @var string
     */
    public $verifyType;
    protected $_name = [
        'domain'     => 'Domain',
        'spaceId'    => 'SpaceId',
        'verifyType' => 'VerifyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->verifyType) {
            $res['VerifyType'] = $this->verifyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyWebHostingDomainOwnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['VerifyType'])) {
            $model->verifyType = $map['VerifyType'];
        }

        return $model;
    }
}
