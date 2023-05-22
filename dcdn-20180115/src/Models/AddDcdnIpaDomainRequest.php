<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class AddDcdnIpaDomainRequest extends Model
{
    /**
     * @description The URL that is used for health checks.
     *
     * @example example.com/image_01.png
     *
     * @var string
     */
    public $checkUrl;

    /**
     * @description The domain name to be added to IPA.
     *
     * A wildcard domain that starts with a period (.) is supported, such as .example.com.
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
     * @description The protocol. Valid values:
     *
     *   **udp**
     *   **tcp**
     *
     **
     *
     **Description** For example: `{"protocol":"udp"}`.
     *
     * @example udp
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The ID of the resource group. If you do not specify a value for this parameter, the system automatically assigns the ID of the default resource group.
     *
     * @example rg
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The acceleration region. Default value: domestic. Valid values:
     *
     *   **domestic**: Chinese mainland
     *   **overseas**: outside the Chinese mainland
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
     * @example [{"content":"10.10.10.10","type":"ipaddr","priority":"20","port":80,"weight":"15"}]
     *
     * @var string
     */
    public $sources;

    /**
     * @description The top-level domain.
     *
     * @example *.com
     *
     * @var string
     */
    public $topLevelDomain;
    protected $_name = [
        'checkUrl'        => 'CheckUrl',
        'domainName'      => 'DomainName',
        'ownerAccount'    => 'OwnerAccount',
        'ownerId'         => 'OwnerId',
        'protocol'        => 'Protocol',
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
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
     * @return AddDcdnIpaDomainRequest
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
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
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
