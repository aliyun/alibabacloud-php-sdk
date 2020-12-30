<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class VerifyVodDomainOwnerRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $verifyType;
    protected $_name = [
        'ownerId'    => 'OwnerId',
        'domainName' => 'DomainName',
        'verifyType' => 'VerifyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->verifyType) {
            $res['VerifyType'] = $this->verifyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyVodDomainOwnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['VerifyType'])) {
            $model->verifyType = $map['VerifyType'];
        }

        return $model;
    }
}
