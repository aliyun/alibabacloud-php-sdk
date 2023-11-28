<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnosisSettingsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Scenarios of intelligent maintenance.
     *
     * @example Business Search
     *
     * @var string
     */
    public $scene;

    /**
     * @description The timestamp of the last update for Intelligent Maintenance scenarios.
     *
     * @example 1588994035385
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'scene'      => 'scene',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
