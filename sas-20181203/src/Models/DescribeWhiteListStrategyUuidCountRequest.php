<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeWhiteListStrategyUuidCountRequest extends Model
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
     * @example 42.120.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The ID of the policy.
     *
     * >  You can call the [DescribeWhiteListStrategyStatistics](~~DescribeWhiteListStrategyStatistics~~) operation to obtain the ID.
     *
     * This parameter is required.
     *
     * @example 8516
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description The type of the policy. Valid values:
     *
     *   **1**: learning policy
     *   **2**: application policy
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'lang' => 'Lang',
        'sourceIp' => 'SourceIp',
        'strategyId' => 'StrategyId',
        'type' => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWhiteListStrategyUuidCountRequest
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
