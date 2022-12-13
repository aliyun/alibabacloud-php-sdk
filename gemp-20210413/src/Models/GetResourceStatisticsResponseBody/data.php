<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetResourceStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $alertCount;

    /**
     * @example 1331
     *
     * @var int
     */
    public $incidentCount;

    /**
     * @example 2211
     *
     * @var int
     */
    public $integrationCount;

    /**
     * @example 221
     *
     * @var int
     */
    public $problemCount;
    protected $_name = [
        'alertCount'       => 'alertCount',
        'incidentCount'    => 'incidentCount',
        'integrationCount' => 'integrationCount',
        'problemCount'     => 'problemCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertCount) {
            $res['alertCount'] = $this->alertCount;
        }
        if (null !== $this->incidentCount) {
            $res['incidentCount'] = $this->incidentCount;
        }
        if (null !== $this->integrationCount) {
            $res['integrationCount'] = $this->integrationCount;
        }
        if (null !== $this->problemCount) {
            $res['problemCount'] = $this->problemCount;
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
        if (isset($map['alertCount'])) {
            $model->alertCount = $map['alertCount'];
        }
        if (isset($map['incidentCount'])) {
            $model->incidentCount = $map['incidentCount'];
        }
        if (isset($map['integrationCount'])) {
            $model->integrationCount = $map['integrationCount'];
        }
        if (isset($map['problemCount'])) {
            $model->problemCount = $map['problemCount'];
        }

        return $model;
    }
}
