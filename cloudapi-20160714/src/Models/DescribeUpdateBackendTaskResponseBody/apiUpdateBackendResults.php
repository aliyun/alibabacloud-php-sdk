<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateBackendTaskResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateBackendTaskResponseBody\apiUpdateBackendResults\apiUpdateBackendResult;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiUpdateBackendResult) {
            $res['ApiUpdateBackendResult'] = [];
            if (null !== $this->apiUpdateBackendResult && \is_array($this->apiUpdateBackendResult)) {
                $n = 0;
                foreach ($this->apiUpdateBackendResult as $item) {
                    $res['ApiUpdateBackendResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiUpdateBackendResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiUpdateBackendResult'])) {
            if (!empty($map['ApiUpdateBackendResult'])) {
                $model->apiUpdateBackendResult = [];
                $n                             = 0;
                foreach ($map['ApiUpdateBackendResult'] as $item) {
                    $model->apiUpdateBackendResult[$n++] = null !== $item ? apiUpdateBackendResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
