<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateBackendTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateBackendTaskResponseBody\apiUpdateBackendResults\apiUpdateBackendResult;

class apiUpdateBackendResults extends Model
{
    /**
     * @var apiUpdateBackendResult[]
     */
    public $apiUpdateBackendResult;
    protected $_name = [
        'apiUpdateBackendResult' => 'ApiUpdateBackendResult',
    ];

    public function validate()
    {
        if (\is_array($this->apiUpdateBackendResult)) {
            Model::validateArray($this->apiUpdateBackendResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiUpdateBackendResult) {
            if (\is_array($this->apiUpdateBackendResult)) {
                $res['ApiUpdateBackendResult'] = [];
                $n1 = 0;
                foreach ($this->apiUpdateBackendResult as $item1) {
                    $res['ApiUpdateBackendResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiUpdateBackendResult'])) {
            if (!empty($map['ApiUpdateBackendResult'])) {
                $model->apiUpdateBackendResult = [];
                $n1 = 0;
                foreach ($map['ApiUpdateBackendResult'] as $item1) {
                    $model->apiUpdateBackendResult[$n1] = apiUpdateBackendResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
