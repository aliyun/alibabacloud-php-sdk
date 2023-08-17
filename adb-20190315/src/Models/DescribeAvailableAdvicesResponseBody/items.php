<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableAdvicesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The date when the suggestion was generated. The date follows the yyyyMMdd format. The date is displayed in UTC.
     *
     * @example 20221124
     *
     * @var string
     */
    public $adviceDate;

    /**
     * @description The suggestion ID.
     *
     * @example dcd04135-0925-4aed-a5a7-e7d92cb1****
     *
     * @var string
     */
    public $adviceId;

    /**
     * @description The type of the suggestion. Valid values:
     *
     *   **Index**: index optimization
     *   **Tiering**: hot and cold data optimization
     *
     * @example Index
     *
     * @var string
     */
    public $adviceType;

    /**
     * @description The benefit of the suggestion.
     *
     * @var string
     */
    public $benefit;

    /**
     * @description The page number of the returned page. The value must be an integer that is greater than 0. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page. Default value: 30. Valid values:
     *
     *   **30**
     *   **50**
     *   **100**
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The reason why the suggestion was generated.
     *
     * @var string
     */
    public $reason;

    /**
     * @description The SQL statement used to apply the suggestion.
     *
     * @example alter table `schema1`.`table1` drop key col1_1_idx
     *
     * @var string
     */
    public $SQL;

    /**
     * @description The total number of entries returned. The value must be an integer that is greater than or equal to 0. Default value: 0.
     *
     * @example 30
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'adviceDate' => 'AdviceDate',
        'adviceId'   => 'AdviceId',
        'adviceType' => 'AdviceType',
        'benefit'    => 'Benefit',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'reason'     => 'Reason',
        'SQL'        => 'SQL',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adviceDate) {
            $res['AdviceDate'] = $this->adviceDate;
        }
        if (null !== $this->adviceId) {
            $res['AdviceId'] = $this->adviceId;
        }
        if (null !== $this->adviceType) {
            $res['AdviceType'] = $this->adviceType;
        }
        if (null !== $this->benefit) {
            $res['Benefit'] = $this->benefit;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->SQL) {
            $res['SQL'] = $this->SQL;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdviceDate'])) {
            $model->adviceDate = $map['AdviceDate'];
        }
        if (isset($map['AdviceId'])) {
            $model->adviceId = $map['AdviceId'];
        }
        if (isset($map['AdviceType'])) {
            $model->adviceType = $map['AdviceType'];
        }
        if (isset($map['Benefit'])) {
            $model->benefit = $map['Benefit'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['SQL'])) {
            $model->SQL = $map['SQL'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
