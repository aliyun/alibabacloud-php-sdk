<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetSourceHostConfigRequest extends Model
{
    /**
     * @var string
     */
    public $backSrcDomain;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $enable;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'backSrcDomain' => 'BackSrcDomain',
        'domainName'    => 'DomainName',
        'enable'        => 'Enable',
        'ownerId'       => 'OwnerId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backSrcDomain) {
            $res['BackSrcDomain'] = $this->backSrcDomain;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
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
     * @return SetSourceHostConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackSrcDomain'])) {
            $model->backSrcDomain = $map['BackSrcDomain'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
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
