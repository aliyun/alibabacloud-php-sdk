<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DiagnoseInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The ID of the diagnostic instance.
     *
     * @example 1535745731000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example es-cn-n6w1o1x0w001c****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example trigger__2020-08-17T17:09:02
     *
     * @var string
     */
    public $reportId;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'createTime' => 'createTime',
        'instanceId' => 'instanceId',
        'reportId'   => 'reportId',
        'state'      => 'state',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->reportId) {
            $res['reportId'] = $this->reportId;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['reportId'])) {
            $model->reportId = $map['reportId'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
