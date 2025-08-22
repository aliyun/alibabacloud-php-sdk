<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeHighlightInfoResponseBody\dataModule;

class DescribeHighlightInfoResponseBody extends Model
{
    /**
     * @var dataModule[]
     */
    public $dataModule;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataModule' => 'DataModule',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dataModule)) {
            Model::validateArray($this->dataModule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataModule) {
            if (\is_array($this->dataModule)) {
                $res['DataModule'] = [];
                $n1 = 0;
                foreach ($this->dataModule as $item1) {
                    $res['DataModule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataModule'])) {
            if (!empty($map['DataModule'])) {
                $model->dataModule = [];
                $n1 = 0;
                foreach ($map['DataModule'] as $item1) {
                    $model->dataModule[$n1] = dataModule::fromMap($item1);
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
