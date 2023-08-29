<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\AddDcdnDomainRequest\tag;
use AlibabaCloud\Tea\Model;

class AddDcdnDomainRequest extends Model
{
    /**
     * @description The URL that is used for health checks.
     *
     * @example example.com
     *
     * @var string
     */
    public $checkUrl;

    /**
     * @description The domain name that you want to add. You can specify only one domain name in each request.
     *
     * Wildcard domain names are supported. A wildcard domain name must start with a period (.), such as .example.com.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $functionType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the resource group. If you do not specify a value for this parameter, the system automatically assigns the ID of the default resource group.
     *
     * @example rg-acfmyuji4b6r4**
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $scene;

    /**
     * @description The acceleration region. Valid values:
     *
     *   **domestic**: Chinese mainland
     *   **overseas**: outside the Chinese mainland
     *   **global**: global
     *
     * Default value: **domestic**.
     * @example domestic
     *
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The information about the addresses of origin servers.
     *
     * @example [{"content":"10.10.10.10","type":"ipaddr","priority":"20","port":80}]
     *
     * @var string
     */
    public $sources;

    /**
     * @description The information about the tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The top-level domain.
     *
     * @example yourTopLevelDomain
     *
     * @var string
     */
    public $topLevelDomain;
    protected $_name = [
        'checkUrl'        => 'CheckUrl',
        'domainName'      => 'DomainName',
        'functionType'    => 'FunctionType',
        'ownerAccount'    => 'OwnerAccount',
        'ownerId'         => 'OwnerId',
        'resourceGroupId' => 'ResourceGroupId',
        'scene'           => 'Scene',
        'scope'           => 'Scope',
        'securityToken'   => 'SecurityToken',
        'sources'         => 'Sources',
        'tag'             => 'Tag',
        'topLevelDomain'  => 'TopLevelDomain',
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
        if (null !== $this->functionType) {
            $res['FunctionType'] = $this->functionType;
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
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->topLevelDomain) {
            $res['TopLevelDomain'] = $this->topLevelDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDcdnDomainRequest
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
        if (isset($map['FunctionType'])) {
            $model->functionType = $map['FunctionType'];
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
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TopLevelDomain'])) {
            $model->topLevelDomain = $map['TopLevelDomain'];
        }

        return $model;
    }
}
