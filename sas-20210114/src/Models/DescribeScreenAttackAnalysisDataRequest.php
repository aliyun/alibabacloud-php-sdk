<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Tea\Model;

class DescribeScreenAttackAnalysisDataRequest extends Model
{
    /**
     * @example true
     *
     * @var string
     */
    public $base64;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example {"crack_type":"9"}
     *
     * @var string
     */
    public $data;

    /**
     * @description This parameter is required.
     *
     * @example 1668064495000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example 1644027670
     *
     * @var int
     */
    public $startTime;

    /**
     * @description This parameter is required.
     *
     * @example DETAILS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'base64' => 'Base64',
        'currentPage' => 'CurrentPage',
        'data' => 'Data',
        'endTime' => 'EndTime',
        'pageSize' => 'PageSize',
        'startTime' => 'StartTime',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->base64) {
            $res['Base64'] = $this->base64;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScreenAttackAnalysisDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Base64'])) {
            $model->base64 = $map['Base64'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
