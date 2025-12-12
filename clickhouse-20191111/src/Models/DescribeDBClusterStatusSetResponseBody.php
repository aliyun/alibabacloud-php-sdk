<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;

class DescribeDBClusterStatusSetResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $statusSet;
    protected $_name = [
        'requestId' => 'RequestId',
        'statusSet' => 'StatusSet',
    ];

    public function validate()
    {
        if (\is_array($this->statusSet)) {
            Model::validateArray($this->statusSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->statusSet) {
            if (\is_array($this->statusSet)) {
                $res['StatusSet'] = [];
                $n1 = 0;
                foreach ($this->statusSet as $item1) {
                    $res['StatusSet'][$n1] = $item1;
                    ++$n1;
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

        if (isset($map['StatusSet'])) {
            if (!empty($map['StatusSet'])) {
                $model->statusSet = [];
                $n1 = 0;
                foreach ($map['StatusSet'] as $item1) {
                    $model->statusSet[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
