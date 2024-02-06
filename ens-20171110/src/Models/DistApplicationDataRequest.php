<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DistApplicationDataRequest extends Model
{
    /**
     * @description The ID of the application. To obtain the application ID, call the ListApplications operation.
     *
     * @example e76f8985-7965-41fc-925b-9648bb6bf650
     *
     * @var string
     */
    public $appId;

    /**
     * @description The list of data files that you want to distribute. The value must be a JSON string.
     *
     * @example [{\"name\":\"app01\",        \"version\":\"1.0\",        \"destPath\":\"/root/installed\",        \"decompress\":true,        \"targetDirName\":\"target01\",        \"fileMode\":755,        \"timeout\":1000    },    {        \"name\":\"app02\",        \"version\":\"1.1\",        \"destPath\":\"/tmp/test.txt\",        \"decompress\":false    }]
     *
     * @var string
     */
    public $data;

    /**
     * @description The canary release policy. The value must be a JSON string. You can specify multiple distribution policies. By default, all data files are distributed.
     *
     * @example {\"name\":\"ScheduleToAllByMatchExpressions\",\"parameters\":{\"match_expressions\":[{\"key\":\"region_id\",\"operator\":\"In\",\"values\":[\"cn-wuhan-telecom_unicom_cmcc-2\"]}]}}
     *
     * @var string
     */
    public $distStrategy;
    protected $_name = [
        'appId'        => 'AppId',
        'data'         => 'Data',
        'distStrategy' => 'DistStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->distStrategy) {
            $res['DistStrategy'] = $this->distStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DistApplicationDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['DistStrategy'])) {
            $model->distStrategy = $map['DistStrategy'];
        }

        return $model;
    }
}
