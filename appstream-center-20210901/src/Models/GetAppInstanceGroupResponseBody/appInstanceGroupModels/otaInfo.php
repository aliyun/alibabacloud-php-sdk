<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupResponseBody\appInstanceGroupModels;

use AlibabaCloud\Dara\Model;

class otaInfo extends Model
{
    /**
     * @var string
     */
    public $newOtaVersion;
    /**
     * @var string
     */
    public $otaVersion;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
