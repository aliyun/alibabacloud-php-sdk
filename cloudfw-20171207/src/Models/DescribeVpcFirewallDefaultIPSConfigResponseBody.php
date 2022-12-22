<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeVpcFirewallDefaultIPSConfigResponseBody extends Model
{
    /**
     * @description Indicates whether basic policies are enabled. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $basicRules;

    /**
     * @description Indicates whether virtual patching is enabled. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $enableAllPatch;

    /**
     * @description The ID of the request.
     *
     * @example 850A84D6-0DE4-4797-A1E8-00090125adf1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The mode of the intrusion prevention system (IPS). Valid values:
     *
     *   **1**: block mode
     *   **0**: monitor mode
     *
     * @example 0
     *
     * @var int
     */
    public $runMode;
    protected $_name = [
        'basicRules'     => 'BasicRules',
        'enableAllPatch' => 'EnableAllPatch',
        'requestId'      => 'RequestId',
        'runMode'        => 'RunMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicRules) {
            $res['BasicRules'] = $this->basicRules;
        }
        if (null !== $this->enableAllPatch) {
            $res['EnableAllPatch'] = $this->enableAllPatch;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcFirewallDefaultIPSConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasicRules'])) {
            $model->basicRules = $map['BasicRules'];
        }
        if (isset($map['EnableAllPatch'])) {
            $model->enableAllPatch = $map['EnableAllPatch'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }

        return $model;
    }
}
