<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeWhiteListEffectiveAssetsRequest extends Model
{
    /**
     * @description The page number. Default value: **1**. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

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
     * @description Specifies whether to return the number of **untrusted programs**. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 0
     *
     * @var int
     */
    public $needStatistics;

    /**
     * @description The number of entries per page. Maximum value: **1000**. Default value: 20. If you leave this parameter empty, 20 data entries are returned per page.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The condition that is used to query assets. You can enter an IP address, a public IP address, an private IP address, or an asset name for fuzzy match.
     *
     * @example 222.185.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @description The source IP address of the request. You do not need to specify this parameter. It is automatically obtained by the system.
     *
     * @example 27.212.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The ID of the policy.
     *
     * >  You can call the [DescribeWhiteListStrategyList](~~DescribeWhiteListStrategyList~~) operation to obtain the ID.
     * @example 8437592
     *
     * @var int
     */
    public $strategyId;
    protected $_name = [
        'currentPage'    => 'CurrentPage',
        'lang'           => 'Lang',
        'needStatistics' => 'NeedStatistics',
        'pageSize'       => 'PageSize',
        'remark'         => 'Remark',
        'sourceIp'       => 'SourceIp',
        'strategyId'     => 'StrategyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->needStatistics) {
            $res['NeedStatistics'] = $this->needStatistics;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWhiteListEffectiveAssetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NeedStatistics'])) {
            $model->needStatistics = $map['NeedStatistics'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }

        return $model;
    }
}
