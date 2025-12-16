<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ReadSchedulerxNotificationPolicyResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ReadSchedulerxNotificationPolicyResponseBody\data\records\referenceApps;

class records extends Model
{
    /**
     * @var string
     */
    public $channelTimeRange;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var referenceApps[]
     */
    public $referenceApps;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $updater;
    protected $_name = [
        'channelTimeRange' => 'ChannelTimeRange',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'description' => 'Description',
        'policyName' => 'PolicyName',
        'referenceApps' => 'ReferenceApps',
        'updateTime' => 'UpdateTime',
        'updater' => 'Updater',
    ];

    public function validate()
    {
        if (\is_array($this->referenceApps)) {
            Model::validateArray($this->referenceApps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelTimeRange) {
            $res['ChannelTimeRange'] = $this->channelTimeRange;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        if (null !== $this->referenceApps) {
            if (\is_array($this->referenceApps)) {
                $res['ReferenceApps'] = [];
                $n1 = 0;
                foreach ($this->referenceApps as $item1) {
                    $res['ReferenceApps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->updater) {
            $res['Updater'] = $this->updater;
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
        if (isset($map['ChannelTimeRange'])) {
            $model->channelTimeRange = $map['ChannelTimeRange'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        if (isset($map['ReferenceApps'])) {
            if (!empty($map['ReferenceApps'])) {
                $model->referenceApps = [];
                $n1 = 0;
                foreach ($map['ReferenceApps'] as $item1) {
                    $model->referenceApps[$n1] = referenceApps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['Updater'])) {
            $model->updater = $map['Updater'];
        }

        return $model;
    }
}
