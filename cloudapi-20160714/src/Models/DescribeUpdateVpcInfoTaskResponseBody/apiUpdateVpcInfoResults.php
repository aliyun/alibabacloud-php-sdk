<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateVpcInfoTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateVpcInfoTaskResponseBody\apiUpdateVpcInfoResults\apiUpdateVpcInfoResult;

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
        if (\is_array($this->apiUpdateVpcInfoResult)) {
            Model::validateArray($this->apiUpdateVpcInfoResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiUpdateVpcInfoResult) {
            if (\is_array($this->apiUpdateVpcInfoResult)) {
                $res['ApiUpdateVpcInfoResult'] = [];
                $n1 = 0;
                foreach ($this->apiUpdateVpcInfoResult as $item1) {
                    $res['ApiUpdateVpcInfoResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiUpdateVpcInfoResult'])) {
            if (!empty($map['ApiUpdateVpcInfoResult'])) {
                $model->apiUpdateVpcInfoResult = [];
                $n1 = 0;
                foreach ($map['ApiUpdateVpcInfoResult'] as $item1) {
                    $model->apiUpdateVpcInfoResult[$n1] = apiUpdateVpcInfoResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
