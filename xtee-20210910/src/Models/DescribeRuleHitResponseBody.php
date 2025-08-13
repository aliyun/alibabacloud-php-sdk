<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeRuleHitResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $resultObject;
    protected $_name = [
        'requestId' => 'RequestId',
        'resultObject' => 'resultObject',
    ];

    public function validate()
    {
        if (\is_array($this->resultObject)) {
            Model::validateArray($this->resultObject);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resultObject) {
            if (\is_array($this->resultObject)) {
                $res['resultObject'] = [];
                foreach ($this->resultObject as $key1 => $value1) {
                    $res['resultObject'][$key1] = $value1;
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

        if (isset($map['resultObject'])) {
            if (!empty($map['resultObject'])) {
                $model->resultObject = [];
                foreach ($map['resultObject'] as $key1 => $value1) {
                    $model->resultObject[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
