<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddVodDomainRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $sources;

    /**
     * @var string
     */
    public $checkUrl;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $topLevelDomain;
    protected $_name = [
        'ownerId'        => 'OwnerId',
        'ownerAccount'   => 'OwnerAccount',
        'securityToken'  => 'SecurityToken',
        'domainName'     => 'DomainName',
        'sources'        => 'Sources',
        'checkUrl'       => 'CheckUrl',
        'scope'          => 'Scope',
        'topLevelDomain' => 'TopLevelDomain',
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
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->sources) {
            $res['Sources'] = $this->sources;
        }
        if (null !== $this->checkUrl) {
            $res['CheckUrl'] = $this->checkUrl;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->topLevelDomain) {
            $res['TopLevelDomain'] = $this->topLevelDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddVodDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Sources'])) {
            $model->sources = $map['Sources'];
        }
        if (isset($map['CheckUrl'])) {
            $model->checkUrl = $map['CheckUrl'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['TopLevelDomain'])) {
            $model->topLevelDomain = $map['TopLevelDomain'];
        }

        return $model;
    }
}
