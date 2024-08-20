<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class BatchSetDcdnDomainConfigsRequest extends Model
{
    /**
     * @description The accelerated domain names. Specify multiple accelerated domain names with commas (,).
     *
     * This parameter is required.
     * @example example.com,example.org
     *
     * @var string
     */
    public $domainNames;

    /**
     * @description The features that you want to configure. Format:
     *
     *   **functionName**: The name of the feature. Separate multiple values with commas (,). For more information, see [A list of features](https://help.aliyun.com/document_detail/410622.html).
     *
     *   **argName**: The feature parameters for **functionName**.
     *   **argValue**: The parameter values set for **functionName**.
     *   **parentid**: the rule ID. This parameter is optional. You can use the **condition** rules engine to create a rule. For information, see [Feature settings for domain names](https://help.aliyun.com/document_detail/388460.html). A rule can identify parameters that are included in requests and filter requests based on the identified parameters. After you create a rule, a [configid](https://help.aliyun.com/document_detail/388994.html) is generated. A configid can be used as parentId that is referenced by other features. This way, you can combine rules and features for flexible configurations.
     *
     * If the **parentId** parameter is **-1**, the existing rules in the configurations are deleted.
     *
     * This parameter is required.
     * @example [{"functionArgs":[{"argName":"switch","argValue":"on"},{"argName":"region","argValue":"*"}],"functionName":"ipv6"}]
     *
     * @var string
     */
    public $functions;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'domainNames'   => 'DomainNames',
        'functions'     => 'Functions',
        'ownerAccount'  => 'OwnerAccount',
        'ownerId'       => 'OwnerId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }
        if (null !== $this->functions) {
            $res['Functions'] = $this->functions;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchSetDcdnDomainConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }
        if (isset($map['Functions'])) {
            $model->functions = $map['Functions'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
