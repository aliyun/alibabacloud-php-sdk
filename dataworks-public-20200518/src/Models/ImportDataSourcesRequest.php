<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ImportDataSourcesRequest extends Model
{
    /**
     * @example [{"SubType":"","DataSourceType":"mysql","EnvType":1,"Name":"mysql_dms2","Description":"aaa","Content":"{\"database\":\"mysql_chengdu_old\",\"password\":\"***\",\"instanceName\":\"rm-2vcrckb37163g7l3w\",\"regionId\":\"cn-chengdu\",\"tag\":\"rds\",\"rdsOwnerId\":\"333\",\"username\":\"mysql_chengdu2\"}"},{"SubType":"","DataSourceType":"mysql","EnvType":1,"Name":"mysql_dms2","Description":"aaa","Content":"{\"database\":\"mysql_chengdu_old\",\"password\":\"***\",\"instanceName\":\"rm-2vcrckb37163g7l3w\",\"regionId\":\"cn-chengdu\",\"tag\":\"rds\",\"rdsOwnerId\":\"143\",\"username\":\"mysql_chengdu2\"}"}]
     *
     * @var string
     */
    public $dataSources;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'dataSources' => 'DataSources',
        'projectId'   => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSources) {
            $res['DataSources'] = $this->dataSources;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportDataSourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSources'])) {
            $model->dataSources = $map['DataSources'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
