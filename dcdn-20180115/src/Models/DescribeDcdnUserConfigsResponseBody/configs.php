<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @description The name of the configuration.
     *
     * The configuration is specified by enterprise users and public service sectors.
     * @example allow_function
     *
     * @var string
     */
    public $argName;

    /**
     * @description The value of the configuration. Valid values:
     *
     *   cc_rule: HTTP flood protection
     *   ddos_dispatch: DDoS mitigation
     *   edge_safe: application security on points of presence (POPs)
     *   blocked_regions: region blacklist
     *   http_acl_policy: precise access control
     *   bot_manager: bot traffic management
     *   ip_reputation: IP reputation library
     *
     * @example {\\"dcdn_allow\\":[\\"cc_rule\\",\\"ddos_dispatch\\"]}
     *
     * @var string
     */
    public $argValue;

    /**
     * @description The name of the feature.
     *
     * @example domain_business_control
     *
     * @var string
     */
    public $functionName;
    protected $_name = [
        'argName'      => 'ArgName',
        'argValue'     => 'ArgValue',
        'functionName' => 'FunctionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->argName) {
            $res['ArgName'] = $this->argName;
        }
        if (null !== $this->argValue) {
            $res['ArgValue'] = $this->argValue;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArgName'])) {
            $model->argName = $map['ArgName'];
        }
        if (isset($map['ArgValue'])) {
            $model->argValue = $map['ArgValue'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        return $model;
    }
}
