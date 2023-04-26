<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddVodDomainRequest extends Model
{
    /**
     * @description ## Common errors
     *
     * |NotInternationRealIdentity|You need to do real name authentication when you use Chinese mainland resources.|400|The error message returned because you have not completed real-name verification that is required to use resources in the Chinese mainland.|
     * @example www.example.com/test.html
     *
     * @var string
     */
    public $checkUrl;

    /**
     * @description *   This operation is available only in the **China (Shanghai)** region.
     *   Before you add a domain name to accelerate, you must activate ApsaraVideo VOD and apply for an Internet content provider (ICP) filing for the domain name. For more information about how to activate ApsaraVideo VOD, see [Activate ApsaraVideo VOD](~~51512~~).
     *   If the content on the origin server is not stored on Alibaba Cloud, the content must be reviewed by Alibaba Cloud. The review will be complete by the end of the next business day after you submit an application.
     *   You can add only one domain name to accelerate in a request. You can add a maximum of 20 accelerated domain names within an Alibaba Cloud account.
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
     * @description The domain name that you want to accelerate. Wildcard domain names that start with periods (.) are supported. Example: .example.com.
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
     * @description ## Sources
     *
     * |---|---|---|---|
     * |type|String|Yes|The type of the origin server. Valid values: <br>**ipaddr**: an IP address. <br>**domain**: a domain name. <br>**oss**: the domain of an Object Storage Service (OSS) bucket.|
     * |content|String|Yes|The address of the origin server. You can specify an IP address or a domain name.|
     * |port|Integer|No|The port number. Valid values: **443** and **80**. <br>Default value: **80**. If you specify **443**, requests are redirected to the origin server over HTTPS. You can also specify a custom port.|
     * |priority|String|No|The priority of the origin server if multiple origin servers are specified. Valid values: **20** and **30**. Default value: **20**. **20** indicates that the origin server is the primary origin server. **30** indicates that the origin server is a secondary origin server.|
     * @example [{"content":"1.1.1.1","type":"ipaddr","priority":"20","port":80}]
     *
     * @var string
     */
    public $sources;

    /**
     * @description The information about the addresses of origin servers. For more information, see the **Sources** table in this topic.
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
