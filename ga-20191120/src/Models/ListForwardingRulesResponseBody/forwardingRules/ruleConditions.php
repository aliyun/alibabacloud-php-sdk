<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponseBody\forwardingRules;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponseBody\forwardingRules\ruleConditions\hostConfig;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListForwardingRulesResponseBody\forwardingRules\ruleConditions\pathConfig;
use AlibabaCloud\Tea\Model;

class ruleConditions extends Model
{
    /**
     * @description The configuration of the domain name.
     *
     * @var hostConfig
     */
    public $hostConfig;

    /**
     * @description The configuration of the path.
     *
     * @var pathConfig
     */
    public $pathConfig;

    /**
     * @description The type of the forwarding condition.
     *
     *   **Host**: domain name
     *   **Path**: path
     *   **RequestHeader**: HTTP header
     *   **Query**: query string
     *   **Method**: HTTP method
     *   **Cookie**: cookie
     *   **SourceIP**: source IP address
     *
     * @example Host
     *
     * @var string
     */
    public $ruleConditionType;

    /**
     * @description The value of the forwarding condition type.
     *
     * Different JSON strings are returned based on the **RuleConditionType** parameter.
     *
     *   If **RuleConditionType** is set to **Host**, a domain name condition is returned. If multiple domain names are returned in a forwarding condition, the relationship between the domain names is OR.
     *   If **RuleConditionType** is set to **Path**, a path condition is returned. If multiple forwarding conditions whose types are path are returned in a forwarding rule, the relationship between the forwarding conditions is OR. If multiple paths are returned in a forwarding condition, the relationship between the paths is OR.
     *   If **RuleConditionType** is set to **RequestHeader**, an HTTP header condition that consists of key-value pairs is returned.
     *   If **RuleConditionType** is set to **Query**, a query string condition that consists of key-value pairs is returned.
     *   If **RuleConditionType** is set to **Method**, an HTTP method condition is returned.
     *   If **RuleConditionType** is set to **Cookie**, a cookie condition that consists of key-value pairs is returned.
     *   If **RuleConditionType** is set to **SourceIP**, a source IP address condition is returned. If multiple source IP addresses are returned in a forwarding condition, the relationship between the source IP addresses is OR.
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
