<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeConcernNecessityResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $concernNecessity;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'concernNecessity' => 'ConcernNecessity',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->concernNecessity)) {
            Model::validateArray($this->concernNecessity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->concernNecessity) {
            if (\is_array($this->concernNecessity)) {
                $res['ConcernNecessity'] = [];
                $n1                      = 0;
                foreach ($this->concernNecessity as $item1) {
                    $res['ConcernNecessity'][$n1++] = $item1;
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
        if (isset($map['ConcernNecessity'])) {
            if (!empty($map['ConcernNecessity'])) {
                $model->concernNecessity = [];
                $n1                      = 0;
                foreach ($map['ConcernNecessity'] as $item1) {
                    $model->concernNecessity[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
