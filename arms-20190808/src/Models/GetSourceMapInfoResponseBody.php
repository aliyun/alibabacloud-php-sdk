<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetSourceMapInfoResponseBody\sourceMapList;

class GetSourceMapInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sourceMapList[]
     */
    public $sourceMapList;
    protected $_name = [
        'requestId' => 'RequestId',
        'sourceMapList' => 'SourceMapList',
    ];

    public function validate()
    {
        if (\is_array($this->sourceMapList)) {
            Model::validateArray($this->sourceMapList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceMapList) {
            if (\is_array($this->sourceMapList)) {
                $res['SourceMapList'] = [];
                $n1 = 0;
                foreach ($this->sourceMapList as $item1) {
                    $res['SourceMapList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['SourceMapList'])) {
            if (!empty($map['SourceMapList'])) {
                $model->sourceMapList = [];
                $n1 = 0;
                foreach ($map['SourceMapList'] as $item1) {
                    $model->sourceMapList[$n1] = sourceMapList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
