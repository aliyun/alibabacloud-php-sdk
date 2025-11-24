<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class DescribeGuestClusterPodsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $podList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'podList' => 'PodList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->podList)) {
            Model::validateArray($this->podList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->podList) {
            if (\is_array($this->podList)) {
                $res['PodList'] = [];
                $n1 = 0;
                foreach ($this->podList as $item1) {
                    $res['PodList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PodList'])) {
            if (!empty($map['PodList'])) {
                $model->podList = [];
                $n1 = 0;
                foreach ($map['PodList'] as $item1) {
                    $model->podList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
