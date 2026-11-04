<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeGroupsResponseBody\groups\instances;

use AlibabaCloud\Dara\Model;

class usageAlertRule extends Model
{
    /**
     * @var string[]
     */
    public $contactGroupNames;

    /**
     * @var string
     */
    public $lastTriggeredAt;

    /**
     * @var int
     */
    public $thresholdPercent;
    protected $_name = [
        'contactGroupNames' => 'ContactGroupNames',
        'lastTriggeredAt' => 'LastTriggeredAt',
        'thresholdPercent' => 'ThresholdPercent',
    ];

    public function validate()
    {
        if (\is_array($this->contactGroupNames)) {
            Model::validateArray($this->contactGroupNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroupNames) {
            if (\is_array($this->contactGroupNames)) {
                $res['ContactGroupNames'] = [];
                $n1 = 0;
                foreach ($this->contactGroupNames as $item1) {
                    $res['ContactGroupNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lastTriggeredAt) {
            $res['LastTriggeredAt'] = $this->lastTriggeredAt;
        }

        if (null !== $this->thresholdPercent) {
            $res['ThresholdPercent'] = $this->thresholdPercent;
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
        if (isset($map['ContactGroupNames'])) {
            if (!empty($map['ContactGroupNames'])) {
                $model->contactGroupNames = [];
                $n1 = 0;
                foreach ($map['ContactGroupNames'] as $item1) {
                    $model->contactGroupNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LastTriggeredAt'])) {
            $model->lastTriggeredAt = $map['LastTriggeredAt'];
        }

        if (isset($map['ThresholdPercent'])) {
            $model->thresholdPercent = $map['ThresholdPercent'];
        }

        return $model;
    }
}
