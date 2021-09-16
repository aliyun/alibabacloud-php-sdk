<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetResourceStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 事件总数
     *
     * @var int
     */
    public $incidentCount;

    /**
     * @description 报警总数
     *
     * @var int
     */
    public $alertCount;

    /**
     * @description 故障总数
     *
     * @var int
     */
    public $problemCount;

    /**
     * @description 集成总数
     *
     * @var int
     */
    public $integrationCount;
    protected $_name = [
        'incidentCount'    => 'incidentCount',
        'alertCount'       => 'alertCount',
        'problemCount'     => 'problemCount',
        'integrationCount' => 'integrationCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->incidentCount) {
            $res['incidentCount'] = $this->incidentCount;
        }
        if (null !== $this->alertCount) {
            $res['alertCount'] = $this->alertCount;
        }
        if (null !== $this->problemCount) {
            $res['problemCount'] = $this->problemCount;
        }
        if (null !== $this->integrationCount) {
            $res['integrationCount'] = $this->integrationCount;
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
        if (isset($map['incidentCount'])) {
            $model->incidentCount = $map['incidentCount'];
        }
        if (isset($map['alertCount'])) {
            $model->alertCount = $map['alertCount'];
        }
        if (isset($map['problemCount'])) {
            $model->problemCount = $map['problemCount'];
        }
        if (isset($map['integrationCount'])) {
            $model->integrationCount = $map['integrationCount'];
        }

        return $model;
    }
}
