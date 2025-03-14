<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SaveWhiteListStrategyRequest extends Model
{
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

    /**
     * @description The source IP address of the request. You do not need to specify this parameter. It is automatically obtained by the system.
     *
     * @example 124.89.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The ID of the application whitelist policy.
     *
     * >  You can call the [DescribeWhiteListStrategyList](~~DescribeWhiteListStrategyList~~) operation to query the ID.
     *
     * @example 8494
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description The name of the application whitelist policy.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $strategyName;

    /**
     * @description The duration of intelligent learning. Unit: hours.
     *
     * This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $studyTime;
    protected $_name = [
        'lang' => 'Lang',
        'sourceIp' => 'SourceIp',
        'strategyId' => 'StrategyId',
        'strategyName' => 'StrategyName',
        'studyTime' => 'StudyTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->studyTime) {
            $res['StudyTime'] = $this->studyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveWhiteListStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['StudyTime'])) {
            $model->studyTime = $map['StudyTime'];
        }

        return $model;
    }
}
