<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddVodDomainRequest extends Model
{
    /**
     * @description The URL that is used for health checks.
     *
     * @example www.example.com/test.html
     *
     * @var string
     */
    public $checkUrl;

    /**
     * @description The domain name for CDN that you want to add to ApsaraVideo VOD. Wildcard domain names are supported. Start the domain name with a period (.). Example: .example.com.
     *
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
     * @description This parameter is applicable to users of level 3 or higher in mainland China and users outside mainland China. Valid values:
     *
     * - **domestic**: mainland China. This is the default value.
     * - **overseas**: outside mainland China.
     * - **global**: regions in and outside mainland China.
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
     * @description The information about the address of the origin server. For more information about the Sources parameter, see the **Sources** section.
     *
     * @example [{"content":"1.1.1.1","type":"ipaddr","priority":"20","port":80}]
     *
     * @var string
     */
    public $sources;

    /**
     * @description The top-level domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $topLevelDomain;
    protected $_name = [
        'checkUrl'       => 'CheckUrl',
        'domainName'     => 'DomainName',
        'ownerAccount'   => 'OwnerAccount',
        'ownerId'        => 'OwnerId',
        'scope'          => 'Scope',
        'securityToken'  => 'SecurityToken',
        'sources'        => 'Sources',
        'topLevelDomain' => 'TopLevelDomain',
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
     * @return AddVodDomainRequest
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
