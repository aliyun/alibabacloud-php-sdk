<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupResponseBody\appInstanceGroupModels;

use AlibabaCloud\Tea\Model;

class otaInfo extends Model
{
    /**
     * @example 0.0.1-D-20220630.11****
     *
     * @var string
     */
    public $newOtaVersion;

    /**
     * @example 0.0.1-D-20220615.11****
     *
     * @var string
     */
    public $otaVersion;

    /**
     * @example ota-e49929gv8acz5****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'newOtaVersion' => 'NewOtaVersion',
        'otaVersion'    => 'OtaVersion',
        'taskId'        => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newOtaVersion) {
            $res['NewOtaVersion'] = $this->newOtaVersion;
        }
        if (null !== $this->otaVersion) {
            $res['OtaVersion'] = $this->otaVersion;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return otaInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewOtaVersion'])) {
            $model->newOtaVersion = $map['NewOtaVersion'];
        }
        if (isset($map['OtaVersion'])) {
            $model->otaVersion = $map['OtaVersion'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
