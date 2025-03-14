<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ReceiveFunctionTrialRewardByAliUidRequest extends Model
{
    /**
     * @description The name of the feature for which you want to apply for a free trial. Valid values:
     *
     *   **trail_honeypot_reward**: cloud honeypot
     *   **trail_file_detect_api_reward**: SDK for malicious file detection
     *
     * @example trail_honeypot_reward
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'functionName' => 'FunctionName',
        'lang' => 'Lang',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReceiveFunctionTrialRewardByAliUidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
