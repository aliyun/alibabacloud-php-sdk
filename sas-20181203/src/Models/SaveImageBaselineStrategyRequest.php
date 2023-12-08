<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SaveImageBaselineStrategyRequest extends Model
{
    /**
     * @description The baseline check items.
     *
     * > You can call the [DescribeImageBaselineStrategy](~~DescribeImageBaselineStrategy~~) operation to query baseline check items.
     * @example ak_leak
     *
     * @var string
     */
    public $baselineItemList;

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
     * @description The data source. If this parameter is left empty, the baseline check policy for images is queried. Valid values:
     *
     *   **default**: the baseline check policy for images
     *   **agentless**: agentless detection
     *
     * @example agentless
     *
     * @var string
     */
    public $source;

    /**
     * @description The ID of the baseline check policy.
     *
     * > You can call the [DescribeImageBaselineStrategy](~~DescribeImageBaselineStrategy~~) operation to query the IDs of baseline check policies.
     * @example 8639
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description The name of the baseline check policy.
     *
     * @example default
     *
     * @var string
     */
    public $strategyName;
    protected $_name = [
        'baselineItemList' => 'BaselineItemList',
        'lang'             => 'Lang',
        'source'           => 'Source',
        'strategyId'       => 'StrategyId',
        'strategyName'     => 'StrategyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineItemList) {
            $res['BaselineItemList'] = $this->baselineItemList;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveImageBaselineStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineItemList'])) {
            $model->baselineItemList = $map['BaselineItemList'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }

        return $model;
    }
}
