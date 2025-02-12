<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskResponseBody\apiResults\apiResult;

class apiResults extends Model
{
    /**
     * @var apiResult[]
     */
    public $apiResult;
    protected $_name = [
        'apiResult' => 'ApiResult',
    ];

    public function validate()
    {
        if (\is_array($this->apiResult)) {
            Model::validateArray($this->apiResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiResult) {
            if (\is_array($this->apiResult)) {
                $res['ApiResult'] = [];
                $n1               = 0;
                foreach ($this->apiResult as $item1) {
                    $res['ApiResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiResult'])) {
            if (!empty($map['ApiResult'])) {
                $model->apiResult = [];
                $n1               = 0;
                foreach ($map['ApiResult'] as $item1) {
                    $model->apiResult[$n1++] = apiResult::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
