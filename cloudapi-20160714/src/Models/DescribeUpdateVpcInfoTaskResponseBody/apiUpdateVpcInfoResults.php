<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateVpcInfoTaskResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateVpcInfoTaskResponseBody\apiUpdateVpcInfoResults\apiUpdateVpcInfoResult;
use AlibabaCloud\Tea\Model;

class apiUpdateVpcInfoResults extends Model
{
    /**
     * @var apiUpdateVpcInfoResult[]
     */
    public $apiUpdateVpcInfoResult;
    protected $_name = [
        'apiUpdateVpcInfoResult' => 'ApiUpdateVpcInfoResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiUpdateVpcInfoResult) {
            $res['ApiUpdateVpcInfoResult'] = [];
            if (null !== $this->apiUpdateVpcInfoResult && \is_array($this->apiUpdateVpcInfoResult)) {
                $n = 0;
                foreach ($this->apiUpdateVpcInfoResult as $item) {
                    $res['ApiUpdateVpcInfoResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiUpdateVpcInfoResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiUpdateVpcInfoResult'])) {
            if (!empty($map['ApiUpdateVpcInfoResult'])) {
                $model->apiUpdateVpcInfoResult = [];
                $n                             = 0;
                foreach ($map['ApiUpdateVpcInfoResult'] as $item) {
                    $model->apiUpdateVpcInfoResult[$n++] = null !== $item ? apiUpdateVpcInfoResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
