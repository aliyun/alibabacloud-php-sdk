<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataCheckReportUrlRequest extends Model
{
    /**
     * @var int
     */
    public $checkType;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dtsJobId;

    /**
     * @var string
     */
    public $tbName;
    protected $_name = [
        'checkType' => 'CheckType',
        'dbName'    => 'DbName',
        'dtsJobId'  => 'DtsJobId',
        'tbName'    => 'TbName',
    ];

    public function validate()
    {
    }

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
        if (isset($map['TbName'])) {
            $model->tbName = $map['TbName'];
        }

        return $model;
    }
}
