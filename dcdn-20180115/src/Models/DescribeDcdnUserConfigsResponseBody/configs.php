<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @description The configuration returned.
     *
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
     *   edge_safe: application security on edge nodes
     *   blocked_regions: region blacklist
     *   http_acl_policy: precise access control
     *   bot_manager: bot traffic management
     *   ip_reputation: IP reputation library
     *
     * @example {\"dcdn_allow\":[\"cc_rule\",\"ddos_dispatch\"]}
     *
     * @var string
     */
    public $argValue;

    /**
     * @description The configuration that you want to query. Valid values:
     *
     *   domain_business_control: user configurations
     *   bot_basic: the basic edition of bot traffic management, which supports authorized crawlers and provides threat intelligence
     *   bot_Advance: the advanced edition of bot traffic management, which supports authorized crawlers and AI intelligent protection and provides threat intelligence
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
