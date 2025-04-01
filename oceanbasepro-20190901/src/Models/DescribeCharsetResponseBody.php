<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeCharsetResponseBody\charset;

class DescribeCharsetResponseBody extends Model
{
    /**
     * @var charset[]
     */
    public $charset;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'charset' => 'Charset',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->charset)) {
            Model::validateArray($this->charset);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->charset) {
            if (\is_array($this->charset)) {
                $res['Charset'] = [];
                $n1 = 0;
                foreach ($this->charset as $item1) {
                    $res['Charset'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Charset'])) {
            if (!empty($map['Charset'])) {
                $model->charset = [];
                $n1 = 0;
                foreach ($map['Charset'] as $item1) {
                    $model->charset[$n1++] = charset::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
