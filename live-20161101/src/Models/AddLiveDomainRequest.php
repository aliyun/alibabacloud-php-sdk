<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\AddLiveDomainRequest\tag;
use AlibabaCloud\Tea\Model;

class AddLiveDomainRequest extends Model
{
    /**
     * @description The URL that is used for health checks.
     *
     * @example http://demo.aliyundoc.com/status.html
     *
     * @var string
     */
    public $checkUrl;

    /**
     * @description The ingest domain or streaming domain that you want to add. Wildcard domain names that start with a period (.) are supported.
     *
     * This parameter is required.
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The type of the domain name. Valid values:
     *
     *   **liveVideo**: streaming domain. This value is required if you set the DomainName parameter to a streaming domain.
     *   **liveEdge**: ingest domain. This value is required if you set the DomainName parameter to an ingest domain.
     *
     * This parameter is required.
     *
     * @example liveVideo
     *
     * @var string
     */
    public $liveDomainType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region in which the domain name resides. Valid values:
     *
     *   **cn-beijing**: China (Beijing)
     *   **cn-shanghai**: China (Shanghai)
     *   **cn-shenzhen**: China (Shenzhen)
     *   **cn-qingdao**: China (Qingdao)
     *   **ap-southeast-1**: Singapore
     *   **eu-central-1**: Germany (Frankfurt)
     *   **ap-northeast-1**: Japan (Tokyo)
     *   **ap-southeast-5**: Indonesia (Jakarta)
     *
     * >  Make sure that the settings of the Region and Scope parameters do not conflict with each other.
     *
     * This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the resource group. For more information about resource groups, see [Resource groups](https://help.aliyun.com/document_detail/2381067.html).
     *
     * @example rg-aekzw******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The edge group. This parameter is applicable to users of level 3 or higher in mainland China and users outside mainland China. Valid values:
     *
     *   **domestic**: mainland China. This is the default value.
     *   **overseas**: outside mainland China.
     *   **global**: regions in and outside mainland China.
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
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The top-level domain name.
     *
     * @example learn.aliyundoc.com
     *
     * @var string
     */
    public $topLevelDomain;
    protected $_name = [
        'checkUrl' => 'CheckUrl',
        'domainName' => 'DomainName',
        'liveDomainType' => 'LiveDomainType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'region' => 'Region',
        'resourceGroupId' => 'ResourceGroupId',
        'scope' => 'Scope',
        'securityToken' => 'SecurityToken',
        'tag' => 'Tag',
        'topLevelDomain' => 'TopLevelDomain',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkUrl) {
            $res['CheckUrl'] = $this->checkUrl;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->liveDomainType) {
            $res['LiveDomainType'] = $this->liveDomainType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
     * @return AddLiveDomainRequest
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
        if (isset($map['LiveDomainType'])) {
            $model->liveDomainType = $map['LiveDomainType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
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
