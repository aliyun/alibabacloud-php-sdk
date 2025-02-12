<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortConnsListResponseBody\connsList;

class DescribePortConnsListResponseBody extends Model
{
    /**
     * @var connsList[]
     */
    public $connsList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connsList' => 'ConnsList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->connsList)) {
            Model::validateArray($this->connsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connsList) {
            if (\is_array($this->connsList)) {
                $res['ConnsList'] = [];
                $n1               = 0;
                foreach ($this->connsList as $item1) {
                    $res['ConnsList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConnsList'])) {
            if (!empty($map['ConnsList'])) {
                $model->connsList = [];
                $n1               = 0;
                foreach ($map['ConnsList'] as $item1) {
                    $model->connsList[$n1++] = connsList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
