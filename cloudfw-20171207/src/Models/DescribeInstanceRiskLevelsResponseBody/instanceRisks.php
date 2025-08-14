<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceRiskLevelsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInstanceRiskLevelsResponseBody\instanceRisks\details;

class instanceRisks extends Model
{
    /**
     * @var details[]
     */
    public $details;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $level;
    protected $_name = [
        'details' => 'Details',
        'instanceId' => 'InstanceId',
        'level' => 'Level',
    ];

    public function validate()
    {
        if (\is_array($this->details)) {
            Model::validateArray($this->details);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->details) {
            if (\is_array($this->details)) {
                $res['Details'] = [];
                $n1 = 0;
                foreach ($this->details as $item1) {
                    $res['Details'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
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
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n1 = 0;
                foreach ($map['Details'] as $item1) {
                    $model->details[$n1] = details::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
