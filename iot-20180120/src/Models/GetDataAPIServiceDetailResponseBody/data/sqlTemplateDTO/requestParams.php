<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponseBody\data\sqlTemplateDTO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\GetDataAPIServiceDetailResponseBody\data\sqlTemplateDTO\requestParams\requestParams;

class requestParams extends Model
{
    /**
     * @var requestParams[]
     */
    public $requestParams;
    protected $_name = [
        'requestParams' => 'RequestParams',
    ];

    public function validate()
    {
        if (\is_array($this->requestParams)) {
            Model::validateArray($this->requestParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestParams) {
            if (\is_array($this->requestParams)) {
                $res['RequestParams'] = [];
                $n1 = 0;
                foreach ($this->requestParams as $item1) {
                    $res['RequestParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestParams'])) {
            if (!empty($map['RequestParams'])) {
                $model->requestParams = [];
                $n1 = 0;
                foreach ($map['RequestParams'] as $item1) {
                    $model->requestParams[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
