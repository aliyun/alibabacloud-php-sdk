<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponseBody\requestParameters\requestParameter;

class requestParameters extends Model
{
    /**
     * @var requestParameter[]
     */
    public $requestParameter;
    protected $_name = [
        'requestParameter' => 'RequestParameter',
    ];

    public function validate()
    {
        if (\is_array($this->requestParameter)) {
            Model::validateArray($this->requestParameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestParameter) {
            if (\is_array($this->requestParameter)) {
                $res['RequestParameter'] = [];
                $n1 = 0;
                foreach ($this->requestParameter as $item1) {
                    $res['RequestParameter'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestParameter'])) {
            if (!empty($map['RequestParameter'])) {
                $model->requestParameter = [];
                $n1 = 0;
                foreach ($map['RequestParameter'] as $item1) {
                    $model->requestParameter[$n1++] = requestParameter::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
