<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\Tea\Model;

class BatchSetScdnDomainConfigsRequest extends Model
{
    /**
     * @example example.com,aliyundoc.com
     *
     * @var string
     */
    public $domainNames;

    /**
     * @example [{"functionArgs":[{"argName":"domain_name","argValue":"example.com"}],"functionName":"set_req_host_header"}]
     *
     * @var string
     */
    public $functions;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'domainNames'   => 'DomainNames',
        'functions'     => 'Functions',
        'ownerAccount'  => 'OwnerAccount',
        'ownerId'       => 'OwnerId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }
        if (null !== $this->functions) {
            $res['Functions'] = $this->functions;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
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
     * @return BatchSetScdnDomainConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }
        if (isset($map['Functions'])) {
            $model->functions = $map['Functions'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
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
