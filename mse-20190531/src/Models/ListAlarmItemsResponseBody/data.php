<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAlarmItemsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alarmCode;

    /**
     * @var string
     */
    public $alarmDesc;

    /**
     * @var string
     */
    public $clusterType;
    protected $_name = [
        'alarmCode'   => 'AlarmCode',
        'alarmDesc'   => 'AlarmDesc',
        'clusterType' => 'ClusterType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmCode) {
            $res['AlarmCode'] = $this->alarmCode;
        }
        if (null !== $this->alarmDesc) {
            $res['AlarmDesc'] = $this->alarmDesc;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
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
        if (isset($map['AlarmCode'])) {
            $model->alarmCode = $map['AlarmCode'];
        }
        if (isset($map['AlarmDesc'])) {
            $model->alarmDesc = $map['AlarmDesc'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        return $model;
    }
}
