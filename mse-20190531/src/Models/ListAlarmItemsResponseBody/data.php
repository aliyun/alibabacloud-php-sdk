<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAlarmItemsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alarmDesc;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $alarmCode;
    protected $_name = [
        'alarmDesc'   => 'AlarmDesc',
        'clusterType' => 'ClusterType',
        'alarmCode'   => 'AlarmCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmDesc) {
            $res['AlarmDesc'] = $this->alarmDesc;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->alarmCode) {
            $res['AlarmCode'] = $this->alarmCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmDesc'])) {
            $model->alarmDesc = $map['AlarmDesc'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['AlarmCode'])) {
            $model->alarmCode = $map['AlarmCode'];
        }

        return $model;
    }
}
