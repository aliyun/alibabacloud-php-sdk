<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetSensitiveDataRequest extends Model
{
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
     * @description The number of the page to return. Minimum value:1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries to return on each page. Maximum value: 1000.
     *
     * @example 1000
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'name'     => 'Name',
        'pageNo'   => 'PageNo',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSensitiveDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
