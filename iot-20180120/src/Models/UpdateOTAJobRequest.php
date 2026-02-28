<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\UpdateOTAJobRequest\tags;

class UpdateOTAJobRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $maximumPerMinute;

    /**
     * @var string[]
     */
    public $srcVersionList;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $targetSelection;

    /**
     * @var int
     */
    public $timeoutInMinutes;

    /**
     * @var string
     */
    public $upgradeType;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'jobId' => 'JobId',
        'maximumPerMinute' => 'MaximumPerMinute',
        'srcVersionList' => 'SrcVersionList',
        'tags' => 'Tags',
        'targetSelection' => 'TargetSelection',
        'timeoutInMinutes' => 'TimeoutInMinutes',
        'upgradeType' => 'UpgradeType',
    ];

    public function validate()
    {
        if (\is_array($this->srcVersionList)) {
            Model::validateArray($this->srcVersionList);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->maximumPerMinute) {
            $res['MaximumPerMinute'] = $this->maximumPerMinute;
        }

        if (null !== $this->srcVersionList) {
            if (\is_array($this->srcVersionList)) {
                $res['SrcVersionList'] = [];
                $n1 = 0;
                foreach ($this->srcVersionList as $item1) {
                    $res['SrcVersionList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetSelection) {
            $res['TargetSelection'] = $this->targetSelection;
        }

        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }

        if (null !== $this->upgradeType) {
            $res['UpgradeType'] = $this->upgradeType;
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
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['MaximumPerMinute'])) {
            $model->maximumPerMinute = $map['MaximumPerMinute'];
        }

        if (isset($map['SrcVersionList'])) {
            if (!empty($map['SrcVersionList'])) {
                $model->srcVersionList = [];
                $n1 = 0;
                foreach ($map['SrcVersionList'] as $item1) {
                    $model->srcVersionList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TargetSelection'])) {
            $model->targetSelection = $map['TargetSelection'];
        }

        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }

        if (isset($map['UpgradeType'])) {
            $model->upgradeType = $map['UpgradeType'];
        }

        return $model;
    }
}
