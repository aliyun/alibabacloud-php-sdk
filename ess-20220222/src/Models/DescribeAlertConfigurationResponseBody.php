<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class DescribeAlertConfigurationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string[]
     */
    public $scaleStatuses;
    protected $_name = [
        'requestId'     => 'RequestId',
        'scaleStatuses' => 'ScaleStatuses',
    ];

    public function validate()
    {
        if (\is_array($this->scaleStatuses)) {
            Model::validateArray($this->scaleStatuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scaleStatuses) {
            if (\is_array($this->scaleStatuses)) {
                $res['ScaleStatuses'] = [];
                $n1                   = 0;
                foreach ($this->scaleStatuses as $item1) {
                    $res['ScaleStatuses'][$n1++] = $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScaleStatuses'])) {
            if (!empty($map['ScaleStatuses'])) {
                $model->scaleStatuses = [];
                $n1                   = 0;
                foreach ($map['ScaleStatuses'] as $item1) {
                    $model->scaleStatuses[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
