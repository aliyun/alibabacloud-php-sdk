<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesRequest\forwardingRules;

use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesRequest\forwardingRules\ruleConditions\hostConfig;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateForwardingRulesRequest\forwardingRules\ruleConditions\pathConfig;
use AlibabaCloud\Tea\Model;

class ruleConditions extends Model
{
    /**
     * @description The domain name configuration.
     *
     * >  We recommend that you use **RuleConditionType** and **RuleConditionValue** rather than this parameter to configure forwarding conditions.
     * @var hostConfig
     */
    public $hostConfig;

    /**
     * @description The path configuration.
     *
     * >  We recommend that you use **RuleConditionType** and **RuleConditionValue** rather than this parameter to configure forwarding conditions.
     * @var pathConfig
     */
    public $pathConfig;

    /**
     * @description The type of the forwarding condition. Valid values:
     *
     *   **Host**: Requests are forwarded based on domain names.
     *   **Path**: Requests are forwarded based on paths.
     *   **RequestHeader**: Requests are forwarded based on HTTP headers.
     *   **Query**: Requests are forwarded based on query strings.
     *   **Method**: Requests are forwarded based on HTTP request methods.
     *   **Cookie**: Requests are forwarded based on cookies.
     *   **SourceIP**: Requests are forwarded based on source IP addresses.
     *
     * This parameter is required.
     * @example Host
     *
     * @var string
     */
    public $ruleConditionType;

    /**
     * @description The value of the forwarding condition. You must specify different JSON strings based on the value of **RuleConditionType**.
     *
     *   If you set **RuleConditionType** to **Host**, this parameter specifies a domain name condition. A forwarding rule can contain only one forwarding condition of the Host type. You can specify multiple domain names in a forwarding condition. The relationship between multiple domain names is OR. The domain name must be 3 to 128 characters in length and can contain letters, digits, hyphens (-), and periods (.). Supported wildcard characters are asterisks (\\*) and question marks (?). Example: `["www.example.com", "www.aliyun.com"]`.
     *
     *   If **RuleConditionType** is set to **Path**, this parameter specifies a path condition. A forwarding rule can contain multiple forwarding conditions of the Path type. The relationship between multiple path conditions is OR. You can specify multiple paths in a forwarding condition. The relationship between multiple paths is OR. The path must be 1 to 128 characters in length, and must start with a forward slash (/). The path can contain letters, digits, and the following special characters: $ - _ . + / & ~ @ : \\". Supported wildcard characters are asterisks (\\*) and question marks (?). Example: `["/a", "/b/"]`.
     *
     *   If you set **RuleConditionType** to **RequestHeader**, this parameter specifies an HTTP header condition that consists of key-value pairs. The header values in a forwarding condition must be unique. Example: `[{"header1":["value1","value2"]}]`.
     *
     *   Key: The key of an HTTP header must be 1 to 40 characters in length, and can contain letters, digits, hyphens (-), and underscores (_).
     *   Value: The value of an HTTP header must be 1 to 128 characters in length, and can contain printable characters whose ASCII values are `greater than or equal to 32 and less than 127`. The value cannot start or end with a space character.
     *
     *   If you set **RuleConditionType** to **Query**, this parameter specifies a query string condition that consists of key-value pairs. Example: `[{"query1":["value1"]}, {"query2":["value2"]}]`.
     *
     *   Key: The key of an HTTP header must be 1 to 100 characters in length, and can contain printable characters whose ASCII values are `greater than or equal to 32 and less than 127`. The key cannot contain uppercase letters, space characters, or the following special characters: `[ ] { } < > \\ ; / ? : @ & = + , $ % | " ^ ~`.
     *   Value: The value of an HTTP header must be 1 to 128 characters in length, and can contain printable characters whose ASCII values are `greater than or equal to 32 and less than 127`. The value cannot contain uppercase letters, space characters, or the following special characters: `[ ] { } < > \\ ; / ? : @ & = + , $ % | " ^ ~`.
     *
     *   If you set **RuleConditionType** to **Method**, this parameter specifies an HTTP request method condition. Valid values: **HEAD**, **GET**, **POST**, **OPTIONS**, **PUT**, **PATCH**, and **DELETE**. Example: `["GET", "OPTIONS", "POST"]`.
     *
     *   If you set **RuleConditionType** to **Cookie**, this parameter specifies a cookie condition that consists of key-value pairs. Example: `[{"cookie1":["value1"]}, {"cookie2":["value2"]}]`.
     *
     *   Key: The key of a cookie must be 1 to 100 characters in length, and can contain printable characters whose ASCII values are `greater than or equal to 32 and less than 127`. The key cannot contain uppercase letters, space characters, or the following special characters: `# [ ] { } \\ | < > &`.
     *   Value: The value of a cookie must be 1 to 128 characters in length, and can contain printable characters whose ASCII values are `greater than or equal to 32 and less than 127`. The value cannot contain uppercase letters, space characters, or the following special characters: `# [ ] { } \\ | < > &`.
     *
     *   If you set **RuleConditionType** to **SourceIP**, this parameter specifies a source IP address condition. You can specify IP addresses, such as 1.1.XX.XX/32. You can also specify CIDR blocks, such as 2.2.XX.XX/24. A forwarding rule can contain only one forwarding condition whose type is SourceIP. You can specify multiple source IP addresses in a forwarding condition. The relationship between multiple source IP addresses is OR. Example: `["1.1.XX.XX/32", "2.2.XX.XX/24"]`.
     *
     * @example ["www.example.com", "www.aliyun.com"]
     *
     * @var string
     */
    public $ruleConditionValue;
    protected $_name = [
        'hostConfig'         => 'HostConfig',
        'pathConfig'         => 'PathConfig',
        'ruleConditionType'  => 'RuleConditionType',
        'ruleConditionValue' => 'RuleConditionValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostConfig) {
            $res['HostConfig'] = null !== $this->hostConfig ? $this->hostConfig->toMap() : null;
        }
        if (null !== $this->pathConfig) {
            $res['PathConfig'] = null !== $this->pathConfig ? $this->pathConfig->toMap() : null;
        }
        if (null !== $this->ruleConditionType) {
            $res['RuleConditionType'] = $this->ruleConditionType;
        }
        if (null !== $this->ruleConditionValue) {
            $res['RuleConditionValue'] = $this->ruleConditionValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleConditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostConfig'])) {
            $model->hostConfig = hostConfig::fromMap($map['HostConfig']);
        }
        if (isset($map['PathConfig'])) {
            $model->pathConfig = pathConfig::fromMap($map['PathConfig']);
        }
        if (isset($map['RuleConditionType'])) {
            $model->ruleConditionType = $map['RuleConditionType'];
        }
        if (isset($map['RuleConditionValue'])) {
            $model->ruleConditionValue = $map['RuleConditionValue'];
        }

        return $model;
    }
}
