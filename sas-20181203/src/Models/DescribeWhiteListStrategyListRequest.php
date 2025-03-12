<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeWhiteListStrategyListRequest extends Model
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
     * @example 116.88.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The ID of the policy. Separate multiple IDs with commas (,).
     *
     * @example 1,2
     *
     * @var string
     */
    public $strategyIds;
    protected $_name = [
        'lang'        => 'Lang',
        'sourceIp'    => 'SourceIp',
        'strategyIds' => 'StrategyIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->strategyIds) {
            $res['StrategyIds'] = $this->strategyIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWhiteListStrategyListRequest
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
        if (isset($map['StrategyIds'])) {
            $model->strategyIds = $map['StrategyIds'];
        }

        return $model;
    }
}
