<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;

class DescribeServerlessJobsRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string[]
     */
    public $jobIds;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'jobIds' => 'JobIds',
    ];

    public function validate()
    {
        if (\is_array($this->jobIds)) {
            Model::validateArray($this->jobIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->jobIds) {
            if (\is_array($this->jobIds)) {
                $res['JobIds'] = [];
                $n1 = 0;
                foreach ($this->jobIds as $item1) {
                    $res['JobIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['JobIds'])) {
            if (!empty($map['JobIds'])) {
                $model->jobIds = [];
                $n1 = 0;
                foreach ($map['JobIds'] as $item1) {
                    $model->jobIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
