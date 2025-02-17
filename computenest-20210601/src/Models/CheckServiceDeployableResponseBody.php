<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\CheckServiceDeployableResponseBody\checkResults;

class CheckServiceDeployableResponseBody extends Model
{
    /**
     * @var checkResults[]
     */
    public $checkResults;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkResults' => 'CheckResults',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->checkResults)) {
            Model::validateArray($this->checkResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkResults) {
            if (\is_array($this->checkResults)) {
                $res['CheckResults'] = [];
                $n1                  = 0;
                foreach ($this->checkResults as $item1) {
                    $res['CheckResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CheckResults'])) {
            if (!empty($map['CheckResults'])) {
                $model->checkResults = [];
                $n1                  = 0;
                foreach ($map['CheckResults'] as $item1) {
                    $model->checkResults[$n1++] = checkResults::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
