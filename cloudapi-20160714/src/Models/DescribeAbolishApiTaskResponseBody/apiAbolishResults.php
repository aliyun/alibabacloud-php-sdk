<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAbolishApiTaskResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAbolishApiTaskResponseBody\apiAbolishResults\apiAbolishResult;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiAbolishResult) {
            $res['ApiAbolishResult'] = [];
            if (null !== $this->apiAbolishResult && \is_array($this->apiAbolishResult)) {
                $n = 0;
                foreach ($this->apiAbolishResult as $item) {
                    $res['ApiAbolishResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiAbolishResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiAbolishResult'])) {
            if (!empty($map['ApiAbolishResult'])) {
                $model->apiAbolishResult = [];
                $n                       = 0;
                foreach ($map['ApiAbolishResult'] as $item) {
                    $model->apiAbolishResult[$n++] = null !== $item ? apiAbolishResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
