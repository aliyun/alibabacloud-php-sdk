<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class SubmitSparkSQLRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example set spark.driver.resourceSpec=medium;set spark.executor.instances=5;  set spark.executor.resourceSpec=medium;  set spark.app.name=sparksqltest;  show databases;
     *
     * @var string
     */
    public $sql;

    /**
     * @description This parameter is required.
     *
     * @example MySparkCluster
     *
     * @var string
     */
    public $vcName;
    protected $_name = [
        'sql'    => 'Sql',
        'vcName' => 'VcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }
        if (null !== $this->vcName) {
            $res['VcName'] = $this->vcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSparkSQLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }
        if (isset($map['VcName'])) {
            $model->vcName = $map['VcName'];
        }

        return $model;
    }
}
