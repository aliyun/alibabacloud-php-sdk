<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayDetailResponseBody\baseInfos;

class DescribePlayDetailResponseBody extends Model
{
    /**
     * @var baseInfos[]
     */
    public $baseInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'baseInfos' => 'BaseInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->baseInfos)) {
            Model::validateArray($this->baseInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseInfos) {
            if (\is_array($this->baseInfos)) {
                $res['BaseInfos'] = [];
                $n1 = 0;
                foreach ($this->baseInfos as $item1) {
                    $res['BaseInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BaseInfos'])) {
            if (!empty($map['BaseInfos'])) {
                $model->baseInfos = [];
                $n1 = 0;
                foreach ($map['BaseInfos'] as $item1) {
                    $model->baseInfos[$n1] = baseInfos::fromMap($item1);
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
