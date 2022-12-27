<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class ModifyCdnDomainRequest extends Model
{
    /**
     * @description The accelerated domain name. You can specify only one domain name in each call.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmyuji4b6r4**
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The list of origin URLs.
     *
     * >  You cannot set both the **Sources** and **TopLevelDomain** parameters in the same request. Otherwise, ********the **TopLevelDomain** parameter cannot take effect.
     * @example [{"content":"1.1.1.1","type":"ipaddr","priority":"20","port":80,"weight":"15"}]
     *
     * @var string
     */
    public $sources;

    /**
     * @description The top-level domain name. To add a top-level domain name, set the parameter CDN_TOP_LEVEL_DOMAIN_GREY_USER_LIST. This feature is available to only selected users.
     *
     * >  You cannot set both the **Sources** and **TopLevelDomain** parameters in the same request. Otherwise, ****the **TopLevelDomain** parameter cannot take effect.
     * @example aliyundoc.com
     *
     * @var string
     */
    public $topLevelDomain;
    protected $_name = [
        'domainName'      => 'DomainName',
        'ownerId'         => 'OwnerId',
        'resourceGroupId' => 'ResourceGroupId',
        'securityToken'   => 'SecurityToken',
        'sources'         => 'Sources',
        'topLevelDomain'  => 'TopLevelDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->sources) {
            $res['Sources'] = $this->sources;
        }
        if (null !== $this->topLevelDomain) {
            $res['TopLevelDomain'] = $this->topLevelDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCdnDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Sources'])) {
            $model->sources = $map['Sources'];
        }
        if (isset($map['TopLevelDomain'])) {
            $model->topLevelDomain = $map['TopLevelDomain'];
        }

        return $model;
    }
}
