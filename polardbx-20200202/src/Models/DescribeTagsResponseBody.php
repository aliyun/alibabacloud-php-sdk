<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeTagsResponseBody\tagInfos;

class DescribeTagsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tagInfos[]
     */
    public $tagInfos;
    protected $_name = [
        'requestId' => 'RequestId',
        'tagInfos' => 'TagInfos',
    ];

    public function validate()
    {
        if (\is_array($this->tagInfos)) {
            Model::validateArray($this->tagInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tagInfos) {
            if (\is_array($this->tagInfos)) {
                $res['TagInfos'] = [];
                $n1 = 0;
                foreach ($this->tagInfos as $item1) {
                    $res['TagInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['TagInfos'])) {
            if (!empty($map['TagInfos'])) {
                $model->tagInfos = [];
                $n1 = 0;
                foreach ($map['TagInfos'] as $item1) {
                    $model->tagInfos[$n1] = tagInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
