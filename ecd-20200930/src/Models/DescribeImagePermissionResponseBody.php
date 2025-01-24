<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeImagePermissionResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $aliUids;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aliUids'   => 'AliUids',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->aliUids)) {
            Model::validateArray($this->aliUids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUids) {
            if (\is_array($this->aliUids)) {
                $res['AliUids'] = [];
                $n1             = 0;
                foreach ($this->aliUids as $item1) {
                    $res['AliUids'][$n1++] = $item1;
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
        if (isset($map['AliUids'])) {
            if (!empty($map['AliUids'])) {
                $model->aliUids = [];
                $n1             = 0;
                foreach ($map['AliUids'] as $item1) {
                    $model->aliUids[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
