<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\AddCdnDomainRequest\tag;
use AlibabaCloud\Tea\Model;

class AddCdnDomainRequest extends Model
{
    /**
     * @description The workload type of the accelerated domain name. Valid values:
     *
     *   **web**: images and small files
     *   **download**: large files
     *   **video**: on-demand video and audio streaming
     *
     * @example web
     *
     * @var string
     */
    public $cdnType;

    /**
     * @description The URL that is used to check the accessibility of the origin server.
     *
     * @example www.example.com/test.html
     *
     * @var string
     */
    public $checkUrl;

    /**
     * @description The domain name that you want to add to Alibaba Cloud CDN.
     *
     * A wildcard domain that starts with a period (.) is supported, such as .example.com.
     * @example .example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $globalResourcePlan;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the resource group.
     *
     * If you do not set this parameter, the system uses the ID of the default resource group.
     * @example rg-acfmyuji4b6r4**
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The acceleration region. Default value: domestic. Valid values:
     *
     *   **domestic**: Chinese mainland
     *   **overseas**: global (excluding the Chinese mainland)
     *   **global**: global
     *
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
     * @example [
     * ]
     * @var string
     */
    public $sources;

    /**
     * @description Details about the tags. You can specify up to 20 tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The top-level domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $topLevelDomain;
    protected $_name = [
        'cdnType'            => 'CdnType',
        'checkUrl'           => 'CheckUrl',
        'domainName'         => 'DomainName',
        'globalResourcePlan' => 'GlobalResourcePlan',
        'ownerAccount'       => 'OwnerAccount',
        'ownerId'            => 'OwnerId',
        'resourceGroupId'    => 'ResourceGroupId',
        'scope'              => 'Scope',
        'securityToken'      => 'SecurityToken',
        'sources'            => 'Sources',
        'tag'                => 'Tag',
        'topLevelDomain'     => 'TopLevelDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdnType) {
            $res['CdnType'] = $this->cdnType;
        }
        if (null !== $this->checkUrl) {
            $res['CheckUrl'] = $this->checkUrl;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->globalResourcePlan) {
            $res['GlobalResourcePlan'] = $this->globalResourcePlan;
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
     * @return AddCdnDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdnType'])) {
            $model->cdnType = $map['CdnType'];
        }
        if (isset($map['CheckUrl'])) {
            $model->checkUrl = $map['CheckUrl'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GlobalResourcePlan'])) {
            $model->globalResourcePlan = $map['GlobalResourcePlan'];
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
