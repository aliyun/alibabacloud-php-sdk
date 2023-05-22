<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class BatchCreateDcdnWafRulesRequest extends Model
{
    /**
     * @description The configurations of the protection rule.
     *
     * @example 1000001
     *
     * @var int
     */
    public $policyId;

    /**
     * @description ## Description of the RuleConfigs parameter
     *
     * | status | string | No | on | Valid values: on and off. Default value: on. |
     * | conditions | Condition | Yes | [ {"key": "URI", "subKey": "","opValue": "contain",  "values": "/login.php" }] | The trigger condition. For more information, see **Table 1 Fields in the Conditions parameter**. |
     * | ccStatus | string | Yes | off | Specifies whether to enable rate limiting. Valid values: on and off. |
     * | rateLimit | RateLimit | No | { "target": "Header", "subKey": "User-Agent", "interval": 5, "threshold": 2, "ttl": 1800} | The rules of rate limiting. If you set ccStatus to on, you must configure this parameter. For more information, see **Table 2 Fields in the rateLimit parameter**. |
     * | ttl | Integer | Yes | 1800 | The validity period of the blacklist. Valid values: 60 to 86400. Unit: seconds. |
     * | status | RateLimitStatus | No | {"code": "404", "ratio": 10} | The information about the HTTP status code. For more information, see **Table 3 Fields in the RateLimitStatus parameter**. |
     * | status | string | No | on | Specifies whether to enable the protection rule. Default value: on. Valid values: on and off. off: disables the multiplexing feature for ports. |
     * | conditions | Condition | Yes | [{ "key": "Http-Method","subKey": "","opValue": "match-one", "values": "GET,POST,DELETE" }] | The trigger condition of the rule. For more information, see **Table 1 Fields in the Conditions parameter**. |
     * ## Scenario 6: Bot management (bot)
     *
     **Rule template**All rules have the four parameters in the following table. For more information, see the rule classification.
     *
     * | action | String | No | Rule actions. For more information, see Rule classification. |
     **Rule category 1: protection target type**| Parameter | Type | Required | Example | Description |
     * ```
     **Rule classification 2: Web SDK integration**| Parameter | Type | Required | Example | Description |
     * ```
     **Rule classification 3: protection target characteristics**| Parameter | Type | Required | Example | Description |
     * | status | String | Yes | on | Specifies whether to enable the rule. Set the value to on. |
     * | config | TrafficFeature | Yes | {"conditions":[{"key":"Header","subKey":"User-Agent","opValue":"contain","values":"Chrome"},{"key":"IP","subKey":"","opValue":"ip-contain","values":"192.168.0.1/24"}]} | The configuration of the rule. For more information, see **condition**. |
     * | action | String | No | Empty | The action of the rule, which is not involved here. Leave the value empty. |
     **condition** (match condition)
     *
     * ```
     **Rule classification 4: legitimate Bot management**| Parameter | Type | Required | Example | Description |
     * | status | String | Yes | on | Specifies whether to enable the rule. Set the value to on. |
     * | config | IntelligenceCrawler | No | {"name":"intelligence_crawler_baidu"} | The configuration of the rule. For more information, see **name (spider whitelist)**. |
     * | action | String | Yes | bypass | The action of the rule. Set the value to bypass. |
     **name (spider whitelist)**| Value | Description |
     * ```
     **Rule classification 5: script-based Bot block (JavaScript)**| Parameter | Type | Required | Example | Description |
     * ```
     **Rule classification 6: advanced Bot defense (dynamic token-based authentication)**| Parameter | Type | Required | Example | Description |
     * ```
     **Rule classification 7: intelligent protection**| Parameter | Type | Required | Example | Description |
     * ```
     **Rule classification 8: IP address throttling**| Parameter | Type | Required | Example | Description |
     * | status | String | Yes | on | Specifies whether to enable the rule. Valid values: on and off. |
     * | config | CustomCcIp | Yes | {"interval":20,"target":"IP","threshold":50,"ttl":2800} | The configuration of the rule. For more information, see **Fields in the config parameter of IP address throttling**. |
     * | action | String | Yes | monitor | The action of the rule. Valid values: deny, monitor, and captcha (only for web). |
     **Fields in the config parameter of IP address throttling**| Field | Type | Required | Example | Description |
     * ```
     **Rule classification 9: device throttling**| Parameter | Type | Required | Example | Description |
     * | status | String | Yes | on | Specifies whether to enable the rule. Valid values: on and off. |
     * | config | CustomCcDev | Yes | {"interval":20,"target":"Header","subKey":"aliwaf_wxbb_umid","threshold":50,"ttl":2800} | The configuration of the rule. For more information, see **Fields in the config parameter of device throttling**. |
     * | action | String | Yes | monitor | The action of the rule. Valid values: deny and monitor. |
     **Fields in the config parameter of device throttling**| Parameter | Type | Required | Example | Description |
     * ```
     **Rule classification 10: custom session-based throttling**| Parameter | Type | Required | Example | Description |
     * | status | String | Yes | on | Specifies whether to enable the rule. Valid values: on and off. |
     * | config | CustomCcIp | Yes | {"interval":10,"target":"Query String Parameter","subKey":"arg","threshold":30,"ttl":1800} | The configuration of the rule. For more information, see **Fields in the config parameter of custom session-based throttling**. |
     * | action | String | Yes | monitor | The action of the rule. Valid values: deny, monitor, and captcha (only for web). |
     **Fields in the config parameter of custom session-based throttling**| Parameter | Type | Required | Example | Description |
     * ```
     **Rule classification 11: Bot threat intelligence library**| Parameter | Type | Required | Example | Description |
     * ```
     **Rule classification 12: data center blacklist**| Parameter | Type | Required | Example | Description |
     * | status | String | Yes | on | Specifies whether to enable the rule. Valid values: on and off. |
     * | config | IntelligenceIdc | Yes | {"name":"intelligence_idc_alibaba"} | The configuration of the rule. For more information, see **Values of name**. |
     * | action | String | Yes | captcha | The action of the rule. Valid values: deny, monitor, and captcha. |
     **Values of name**| Value | Description |
     * ```
     **Rule classification 13: fake spider blocking**| Parameter | Type | Required | Example | Description |
     * ```
     **Rule classification 14: Bot characteristic detection**| Parameter | Type | Required | Example | Description |
     * | status | String | Yes | on | Specifies whether to enable the rule. Set the value to on. |
     * | config | AppSdk | Yes | {"featureAbnormal":["simulator","proxy","root","debugged","hook","virtual","antiReplay","signInvalid"],"customSignStatus":"on","customSign":{"key":"header","value":"ua"}} | The configuration of the rule. For more information, see **Fields in the config parameter of Bot characteristic detection**. |
     * | action | String | Yes | monitor | The action of the rule. Valid values: deny and monitor. |
     **Fields in the config parameter of Bot characteristic detection**| Parameter | Type | Required | Example | Description |
     * ```
     **Rule classification 15: advanced protection (secondary packaging detection)**| Parameter | Type | Required | Example | Description |
     * | status | String | Yes | on | Specifies whether to enable the rule. Set the value to on. |
     * | config | AppPackage | No | {"packageSigns":[{"name":"aaaaa","sign":"bbbb"},{"name":"cccc","sign":"dddd"}]} | The configuration of the rule. For more information, see **Fields in the packageSigns parameter**. |
     * | action | String | Yes | monitor | The action of the rule. Valid values: deny and monitor. |
     **Fields in the packageSigns parameter**| Parameter | Type | Required | Example | Description |
     * ```
     **Configuration example of Bot management and web page/browser protection**```
     * ```
     **Configuration example of Bot management and app protection**```
     * ```
     * @example {"name":"ttttt","action":"monitor","conditions":[{"key":"URL","opValue":"match-one","values":"1,2,3,4,5"},{"key":"Header","opValue":"contain-one","subKey":"testheader","values":"6,7,8,9,10"}],"ratelimit":{"target":"header","interval":10,"threshold":5,"ttl":1800,"subKey":"testheadercc","status":{"code":"502","count":5}},"ccStatus":"on","effect":"rule","status":"on"}
     *
     * @var string
     */
    public $ruleConfigs;
    protected $_name = [
        'policyId'    => 'PolicyId',
        'ruleConfigs' => 'RuleConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->ruleConfigs) {
            $res['RuleConfigs'] = $this->ruleConfigs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateDcdnWafRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RuleConfigs'])) {
            $model->ruleConfigs = $map['RuleConfigs'];
        }

        return $model;
    }
}
