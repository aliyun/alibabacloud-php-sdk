<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataCheckReportUrlRequest extends Model
{
    /**
     * @description The data verification method. Valid values:
     *
     *   **1**: full data verification.
     *   **2**: incremental data verification.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $checkType;

    /**
     * @description The name of the verified source database.
     *
     * This parameter is required.
     *
     * @example dtsdb
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of the Data Transmission Service (DTS) task. You can call the [DescribeDtsJobs](https://help.aliyun.com/document_detail/209702.html) operation to query the task ID.
     *
     * This parameter is required.
     *
     * @example f4612nr2182****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description Resource group ID.
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The name of the table verified in the source database.
     *
     * This parameter is required.
     *
     * @example student
     *
     * @var string
     */
    public $tbName;
    protected $_name = [
        'checkType' => 'CheckType',
        'dbName' => 'DbName',
        'dtsJobId' => 'DtsJobId',
        'resourceGroupId' => 'ResourceGroupId',
        'tbName' => 'TbName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tbName) {
            $res['TbName'] = $this->tbName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataCheckReportUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TbName'])) {
            $model->tbName = $map['TbName'];
        }

        return $model;
    }
}
