<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class BatchUpdateCdnDomainRequest extends Model
{
    /**
     * @description The accelerated domain names. You can specify one or more accelerated domain names. Separate domain names with commas (,).
     *
     * @example example.com,example.org
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
     * @description The information about the addresses of origin servers.
     *
     * >  You can set only one of **Sources** and **TopLevelDomain**. If you set both **Sources** and **TopLevelDomain**, **TopLevelDomain** does not take effect.
     * @example [{"content":"10.10.10.10","type":"ipaddr","priority":"20","port":80,"weight":"15"}]
     *
     * @var string
     */
    public $sources;

    /**
     * @description The top-level domain name.
     *
     * >  You can set only one of **Sources** and **TopLevelDomain**. If you set both **Sources** and **TopLevelDomain**, **TopLevelDomain** does not take effect.
     * @example example.com
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
     * @return BatchUpdateCdnDomainRequest
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
