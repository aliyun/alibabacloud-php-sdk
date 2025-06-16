<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetSiteCurrentNSResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $NSList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'NSList' => 'NSList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->NSList)) {
            Model::validateArray($this->NSList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->NSList) {
            if (\is_array($this->NSList)) {
                $res['NSList'] = [];
                $n1 = 0;
                foreach ($this->NSList as $item1) {
                    $res['NSList'][$n1] = $item1;
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
        if (isset($map['NSList'])) {
            if (!empty($map['NSList'])) {
                $model->NSList = [];
                $n1 = 0;
                foreach ($map['NSList'] as $item1) {
                    $model->NSList[$n1] = $item1;
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
