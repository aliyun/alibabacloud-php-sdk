<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\Tea\Model;

class AddScdnDomainRequest extends Model
{
    /**
     * @example www.yourdomain.com/test.html
     *
     * @var string
     */
    public $checkUrl;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example rg-acfmyuji4b6r4**
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example overseas
     *
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example [{"content":"1.1.1.1","type":"ipaddr","priority":"20","port":80}]
     *
     * @var string
     */
    public $sources;
    protected $_name = [
        'checkUrl'        => 'CheckUrl',
        'domainName'      => 'DomainName',
        'ownerAccount'    => 'OwnerAccount',
        'ownerId'         => 'OwnerId',
        'resourceGroupId' => 'ResourceGroupId',
        'scope'           => 'Scope',
        'securityToken'   => 'SecurityToken',
        'sources'         => 'Sources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkUrl) {
            $res['CheckUrl'] = $this->checkUrl;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->sources) {
            $res['Sources'] = $this->sources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddScdnDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckUrl'])) {
            $model->checkUrl = $map['CheckUrl'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Sources'])) {
            $model->sources = $map['Sources'];
        }

        return $model;
    }
}
