<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetCcConfigRequest extends Model
{
    /**
     * @var string
     */
    public $allowIps;

    /**
     * @var string
     */
    public $blockIps;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'allowIps'      => 'AllowIps',
        'blockIps'      => 'BlockIps',
        'domainName'    => 'DomainName',
        'ownerId'       => 'OwnerId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowIps) {
            $res['AllowIps'] = $this->allowIps;
        }
        if (null !== $this->blockIps) {
            $res['BlockIps'] = $this->blockIps;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetCcConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowIps'])) {
            $model->allowIps = $map['AllowIps'];
        }
        if (isset($map['BlockIps'])) {
            $model->blockIps = $map['BlockIps'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
