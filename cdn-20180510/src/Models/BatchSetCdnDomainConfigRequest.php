<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class BatchSetCdnDomainConfigRequest extends Model
{
    /**
     * @description The accelerated domain names. You can specify multiple accelerated domain names and separate them with commas (,).
     *
     * This parameter is required.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domainNames;

    /**
     * @description The features that you want to configure. Format:
     *
     *   **functionName**: the name of the feature. This parameter is required. Separate multiple values with commas (,). For more information, see [Parameters for configuring features for domain names](https://help.aliyun.com/document_detail/388460.html).
     *   **argName**: the feature parameter for **functionName**. This parameter is required. You can specify multiple feature parameters.
     *   **argValue**: the parameter value that is specified for **functionName**. This parameter is required.
     *   **parentid**: the rule condition ID. This parameter is optional. You can use the **condition** rule engine to create a rule condition. For information, see [Parameters for configuring features for domain names](https://help.aliyun.com/document_detail/388460.html). A rule condition can identify parameters that are included in requests and filter requests based on the identified parameters. After you create a rule condition, a [configid](https://help.aliyun.com/document_detail/388994.html) is generated. A configid can be used as parentId that is referenced by other features. This way, you can combine rule conditions and features for flexible configurations.
     *
     * If the **ParentId** parameter is \\*\\*-1\\*\\*, the existing rule conditions in the configurations are deleted.
     *
     * ```[{
     * "functionArgs": [{
     * "argName": "Parameter A",
     * "argValue": "Value of parameter A"
     * },
     * {
     * "argName": "Parameter B",
     * "argValue": "Value of parameter B"
     * }],
     * "functionName": "Feature name"
     * "parentId": Optional. parentId corresponds to configid of the referenced rule condition
     * }]
     * ```
     *
     * The following code provides a sample configuration if **parentId** is not used. In this example, the **origin_request_header** feature is used to add back-to-origin HTTP headers, and the rule condition whose configuration ID is **configid=222728944812032** is referenced.
     *
     * ```[{
     * "functionArgs": [{
     * "argName": "header_operation_type",
     * "argValue": "add"
     * }, {
     * "argName": "header_name",
     * "argValue": "Accept-Encoding"
     * }, {
     * "argName": "header_value",
     * "argValue": "gzip"
     * }, {
     * "argName": "duplicate",
     * "argValue": "off"
     * }],
     * "functionName": "origin_request_header"
     * }]
     * ```
     *
     * The following code shows a sample configuration if **parentId** is used. In this example, the **origin_request_header** feature is used to add back-to-origin HTTP headers, and the rule condition whose configuration ID is **222728944812032** is referenced.
     *
     * ```[{
     * "functionArgs": [{
     * "argName": "header_operation_type",
     * "argValue": "add"
     * }, {
     * "argName": "header_name",
     * "argValue": "Accept-Encoding"
     * }, {
     * "argName": "header_value",
     * "argValue": "gzip"
     * }, {
     * "argName": "duplicate",
     * "argValue": "off"
     * }],
     * "functionName": "origin_request_header",
     * "parentId": 222728944812032
     * }]
     * ```
     *
     * The following code provides a sample configuration that deletes the reference to **parentId** for a feature that uses **parentId**. This example shows how to delete the rule condition that has a configuration ID of **222728944812032** and is referenced when **origin_request_header** feature is used to add back-to-origin HTTP headers.
     *
     * ```[{
     * "functionArgs": [{
     * "argName": "header_operation_type",
     * "argValue": "add"
     * }, {
     * "argName": "header_name",
     * "argValue": "Accept-Encoding"
     * }, {
     * "argName": "header_value",
     * "argValue": "gzip"
     * }, {
     * "argName": "duplicate",
     * "argValue": "off"
     * }],
     * "functionName": "origin_request_header",
     * "parentId": -1
     * }]
     * ```
     *
     * This parameter is required.
     *
     * @example [{"functionArgs": [{"argName": "key","argValue": "Content-Encoding"},{"argName": "value","argValue": "gzip"}],"functionName": "set_resp_header"} ]
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
        'domainNames' => 'DomainNames',
        'functions' => 'Functions',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate() {}

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
     * @return BatchSetCdnDomainConfigRequest
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
