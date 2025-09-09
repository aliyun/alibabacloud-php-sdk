<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigFullInfoResponseBody\addressPools\addressPool;

use AlibabaCloud\Dara\Model;

class requestSource extends Model
{
    /**
     * @var string[]
     */
    public $requestSource;
    protected $_name = [
        'requestSource' => 'RequestSource',
    ];

    public function validate()
    {
        if (\is_array($this->requestSource)) {
            Model::validateArray($this->requestSource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestSource) {
            if (\is_array($this->requestSource)) {
                $res['RequestSource'] = [];
                $n1 = 0;
                foreach ($this->requestSource as $item1) {
                    $res['RequestSource'][$n1] = $item1;
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
        if (isset($map['RequestSource'])) {
            if (!empty($map['RequestSource'])) {
                $model->requestSource = [];
                $n1 = 0;
                foreach ($map['RequestSource'] as $item1) {
                    $model->requestSource[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
