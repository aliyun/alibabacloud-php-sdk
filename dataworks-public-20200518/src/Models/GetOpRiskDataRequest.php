<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetOpRiskDataRequest extends Model
{
    /**
     * @description The date on which the access records were queried. Specify the value in the yyyyMMdd format.
     *
     * This parameter is required.
     * @example 20210221
     *
     * @var string
     */
    public $date;

    /**
     * @description The parameters that you can specify to query the access records. Valid values:
     *
     *   dbType: the data type
     *   instanceName: the name of the instance
     *   databaseName: the name of the database
     *   projectName: the name of the workspace
     *   clusterName: the name of the cluster
     *
     * You must specify the parameters based on the compute engine that you use in your business.
     * @example [ {"dbType":"hologres","instanceName":"ABC","databaseName":"abc"}, {"dbType":"ODPS.ODPS","projectName":"adbc"} ]
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of the page to return. Minimum value: 1.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries to return on each page. Maximum value: 1000.
     *
     * This parameter is required.
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The method that you use to identify risks.
     *
     *   You can manually identify risks.
     *   You can also use a risk rule to identify risks. You can go to the DataWorks console to obtain the name of the risk rule on the Custom Identification Rules page of Data Security Guard.
     *
     * @var string
     */
    public $riskType;
    protected $_name = [
        'date'     => 'Date',
        'name'     => 'Name',
        'pageNo'   => 'PageNo',
        'pageSize' => 'PageSize',
        'riskType' => 'RiskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOpRiskDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }

        return $model;
    }
}
