<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class BatchAddDcdnDomainRequest extends Model
{
    /**
     * @description The following table describes the fields in the Sources parameter.
     *
     * | ----- | ---- | -------- | ----------- |
     * | type | String | Yes | The type of the origin server. Valid values: **ipaddr**: the IP address
     *
     **domain**: the domain name
     *
     **oss**: the endpoint of an Object Storage Service (OSS) bucket
     *
     **fc_domain**: the domain name of Function Compute |
     * | content | String | Yes | The address of the origin server. You can specify an IP address or a domain name. |
     * | port | Integer | No | The port. Valid values: **80**: the default port
     *
     **443**: the HTTPS port
     *
     * A custom port |
     * | priority | String | No | The priority of the origin server if multiple origin servers are specified. Default value: 20. Valid values: **20**: the primary origin server
     *
     **30**: the secondary origin server |
     * | weight | String | No | The weight of the origin server if multiple origin servers are specified. Valid values: 0 to 100. Default value: 10. |
     * @example www.example.com/test.html
     *
     * @var string
     */
    public $checkUrl;

    /**
     * @description The top-level domain name.
     *
     * @example example.com,example.org
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
     * @description The ID of the request.
     *
     * @example testID
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Adds one or more domain names to Dynamic Route for CDN (DCDN).
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
     * @description **Prerequisites**:
     *
     *   The [DCDN service is activated](~~64926~~).
     *   Internet Content Provider (ICP) filing is complete for the accelerated domain names.
     *
     * >
     *   If the content of the origin server is not stored on Alibaba Cloud, the content must be reviewed. After you submit the request, the review is complete by the end of the following business day.
     *   The maximum number of domain names configured at a time is 50.
     *   The maximum number of times that each user can call this operation per second is 30.
     *
     * @example [{"content":"10.10.10.10","type":"ipaddr","priority":"20","port":80,"weight":"15"}]
     *
     * @var string
     */
    public $sources;

    /**
     * @example example.com
     *
     * @var string
     */
    public $topLevelDomain;
    protected $_name = [
        'checkUrl'        => 'CheckUrl',
        'domainName'      => 'DomainName',
        'ownerAccount'    => 'OwnerAccount',
        'ownerId'         => 'OwnerId',
        'resourceGroupId' => 'ResourceGroupId',
        'scope'           => 'Scope',
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
        if (null !== $this->topLevelDomain) {
            $res['TopLevelDomain'] = $this->topLevelDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddDcdnDomainRequest
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
        if (isset($map['TopLevelDomain'])) {
            $model->topLevelDomain = $map['TopLevelDomain'];
        }

        return $model;
    }
}
