<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeWhiteListProcessRequest extends Model
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
     * @description The sort order. Default value: descending order. Valid values:
     *
     *   **1**: ascending order
     *   **2**: descending order
     *
     * @example 2
     *
     * @var int
     */
    public $desc;

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
     * @description The item based on which you want to sort the returned results. Default value: **process type**. Valid values:
     *
     *   **1**: process type
     *   **2**: degree of trustability
     *
     * @example 1
     *
     * @var int
     */
    public $orderBy;

    /**
     * @description The number of entries per page. Maximum value: 1000. Default value: 20. If you leave this parameter empty, 20 data entries are returned per page.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the process.
     *
     * @example sys_creat
     *
     * @var string
     */
    public $processName;

    /**
     * @description The type of the process. Valid values:
     *
     *   **1**: trusted
     *   **2**: suspicious
     *   **3**: malicious
     *
     * @example 1
     *
     * @var int
     */
    public $processType;

    /**
     * @description The source IP address of the request. You do not need to specify this parameter. It is automatically obtained by the system.
     *
     * @example 27.223.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The ID of the policy.
     *
     * This parameter is required.
     * @example 8562
     *
     * @var int
     */
    public $strategyId;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'desc'        => 'Desc',
        'lang'        => 'Lang',
        'orderBy'     => 'OrderBy',
        'pageSize'    => 'PageSize',
        'processName' => 'ProcessName',
        'processType' => 'ProcessType',
        'sourceIp'    => 'SourceIp',
        'strategyId'  => 'StrategyId',
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
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }
        if (null !== $this->processType) {
            $res['ProcessType'] = $this->processType;
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
     * @return DescribeWhiteListProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }
        if (isset($map['ProcessType'])) {
            $model->processType = $map['ProcessType'];
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
