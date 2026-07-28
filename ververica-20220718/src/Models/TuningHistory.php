<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ververica\V20220718\Models\TuningHistory\newResourceSetting;
use AlibabaCloud\SDK\Ververica\V20220718\Models\TuningHistory\oldResourceSetting;

class TuningHistory extends Model
{
    /**
     * @var string
     */
    public $actionType;

    /**
     * @var string[]
     */
    public $annotations;

    /**
     * @var string
     */
    public $deploymentName;

    /**
     * @var bool
     */
    public $isHotUpdate;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var newResourceSetting
     */
    public $newResourceSetting;

    /**
     * @var oldResourceSetting
     */
    public $oldResourceSetting;

    /**
     * @var int
     */
    public $triggerTime;

    /**
     * @var string
     */
    public $tuningId;

    /**
     * @var string
     */
    public $tuningMessage;

    /**
     * @var string
     */
    public $tuningState;
    protected $_name = [
        'actionType' => 'actionType',
        'annotations' => 'annotations',
        'deploymentName' => 'deploymentName',
        'isHotUpdate' => 'isHotUpdate',
        'jobId' => 'jobId',
        'newResourceSetting' => 'newResourceSetting',
        'oldResourceSetting' => 'oldResourceSetting',
        'triggerTime' => 'triggerTime',
        'tuningId' => 'tuningId',
        'tuningMessage' => 'tuningMessage',
        'tuningState' => 'tuningState',
    ];

    public function validate()
    {
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        if (null !== $this->newResourceSetting) {
            $this->newResourceSetting->validate();
        }
        if (null !== $this->oldResourceSetting) {
            $this->oldResourceSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['actionType'] = $this->actionType;
        }

        if (null !== $this->annotations) {
            if (\is_array($this->annotations)) {
                $res['annotations'] = [];
                foreach ($this->annotations as $key1 => $value1) {
                    $res['annotations'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->deploymentName) {
            $res['deploymentName'] = $this->deploymentName;
        }

        if (null !== $this->isHotUpdate) {
            $res['isHotUpdate'] = $this->isHotUpdate;
        }

        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }

        if (null !== $this->newResourceSetting) {
            $res['newResourceSetting'] = null !== $this->newResourceSetting ? $this->newResourceSetting->toArray($noStream) : $this->newResourceSetting;
        }

        if (null !== $this->oldResourceSetting) {
            $res['oldResourceSetting'] = null !== $this->oldResourceSetting ? $this->oldResourceSetting->toArray($noStream) : $this->oldResourceSetting;
        }

        if (null !== $this->triggerTime) {
            $res['triggerTime'] = $this->triggerTime;
        }

        if (null !== $this->tuningId) {
            $res['tuningId'] = $this->tuningId;
        }

        if (null !== $this->tuningMessage) {
            $res['tuningMessage'] = $this->tuningMessage;
        }

        if (null !== $this->tuningState) {
            $res['tuningState'] = $this->tuningState;
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
        if (isset($map['actionType'])) {
            $model->actionType = $map['actionType'];
        }

        if (isset($map['annotations'])) {
            if (!empty($map['annotations'])) {
                $model->annotations = [];
                foreach ($map['annotations'] as $key1 => $value1) {
                    $model->annotations[$key1] = $value1;
                }
            }
        }

        if (isset($map['deploymentName'])) {
            $model->deploymentName = $map['deploymentName'];
        }

        if (isset($map['isHotUpdate'])) {
            $model->isHotUpdate = $map['isHotUpdate'];
        }

        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        if (isset($map['newResourceSetting'])) {
            $model->newResourceSetting = newResourceSetting::fromMap($map['newResourceSetting']);
        }

        if (isset($map['oldResourceSetting'])) {
            $model->oldResourceSetting = oldResourceSetting::fromMap($map['oldResourceSetting']);
        }

        if (isset($map['triggerTime'])) {
            $model->triggerTime = $map['triggerTime'];
        }

        if (isset($map['tuningId'])) {
            $model->tuningId = $map['tuningId'];
        }

        if (isset($map['tuningMessage'])) {
            $model->tuningMessage = $map['tuningMessage'];
        }

        if (isset($map['tuningState'])) {
            $model->tuningState = $map['tuningState'];
        }

        return $model;
    }
}
