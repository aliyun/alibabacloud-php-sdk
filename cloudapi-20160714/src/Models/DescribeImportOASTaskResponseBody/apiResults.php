<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeImportOASTaskResponseBody\apiResults\apiResult;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiResult) {
            $res['ApiResult'] = [];
            if (null !== $this->apiResult && \is_array($this->apiResult)) {
                $n = 0;
                foreach ($this->apiResult as $item) {
                    $res['ApiResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiResult'])) {
            if (!empty($map['ApiResult'])) {
                $model->apiResult = [];
                $n                = 0;
                foreach ($map['ApiResult'] as $item) {
                    $model->apiResult[$n++] = null !== $item ? apiResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
