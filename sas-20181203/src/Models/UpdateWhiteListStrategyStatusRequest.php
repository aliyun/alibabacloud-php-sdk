<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateWhiteListStrategyStatusRequest extends Model
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
     * @example 219.143.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The status of the policy. Valid values:
     *
     *   **0**: deleted
     *   **1**: learning
     *   **2**: paused
     *   **3**: learning completed
     *   **4**: enabled
     *
     * >
     *
     *   You can change the status to **paused** only if the policy status is **learning**.
     *
     *   You can change the status to **learning** only if the policy status is **paused**.
     *
     *   You can change the status to **enabled** only if the policy status is **learning completed**.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the policy.
     *
     * >  You can call the [DescribeWhiteListStrategyList](~~DescribeWhiteListStrategyList~~) operation to obtain the ID.
     *
     * This parameter is required.
     *
     * @example 8516
     *
     * @var string
     */
    public $strategyIds;
    protected $_name = [
        'lang' => 'Lang',
        'sourceIp' => 'SourceIp',
        'status' => 'Status',
        'strategyIds' => 'StrategyIds',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->strategyIds) {
            $res['StrategyIds'] = $this->strategyIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWhiteListStrategyStatusRequest
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StrategyIds'])) {
            $model->strategyIds = $map['StrategyIds'];
        }

        return $model;
    }
}
