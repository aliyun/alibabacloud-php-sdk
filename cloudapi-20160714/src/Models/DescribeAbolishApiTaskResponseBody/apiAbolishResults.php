<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAbolishApiTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAbolishApiTaskResponseBody\apiAbolishResults\apiAbolishResult;

class apiAbolishResults extends Model
{
    /**
     * @var apiAbolishResult[]
     */
    public $apiAbolishResult;
    protected $_name = [
        'apiAbolishResult' => 'ApiAbolishResult',
    ];

    public function validate()
    {
        if (\is_array($this->apiAbolishResult)) {
            Model::validateArray($this->apiAbolishResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiAbolishResult) {
            if (\is_array($this->apiAbolishResult)) {
                $res['ApiAbolishResult'] = [];
                $n1 = 0;
                foreach ($this->apiAbolishResult as $item1) {
                    $res['ApiAbolishResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiAbolishResult'])) {
            if (!empty($map['ApiAbolishResult'])) {
                $model->apiAbolishResult = [];
                $n1 = 0;
                foreach ($map['ApiAbolishResult'] as $item1) {
                    $model->apiAbolishResult[$n1++] = apiAbolishResult::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
