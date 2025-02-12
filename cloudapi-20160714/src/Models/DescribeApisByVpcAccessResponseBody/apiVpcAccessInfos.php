<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByVpcAccessResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByVpcAccessResponseBody\apiVpcAccessInfos\apiVpcAccessInfo;

class apiVpcAccessInfos extends Model
{
    /**
     * @var apiVpcAccessInfo[]
     */
    public $apiVpcAccessInfo;
    protected $_name = [
        'apiVpcAccessInfo' => 'ApiVpcAccessInfo',
    ];

    public function validate()
    {
        if (\is_array($this->apiVpcAccessInfo)) {
            Model::validateArray($this->apiVpcAccessInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiVpcAccessInfo) {
            if (\is_array($this->apiVpcAccessInfo)) {
                $res['ApiVpcAccessInfo'] = [];
                $n1                      = 0;
                foreach ($this->apiVpcAccessInfo as $item1) {
                    $res['ApiVpcAccessInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiVpcAccessInfo'])) {
            if (!empty($map['ApiVpcAccessInfo'])) {
                $model->apiVpcAccessInfo = [];
                $n1                      = 0;
                foreach ($map['ApiVpcAccessInfo'] as $item1) {
                    $model->apiVpcAccessInfo[$n1++] = apiVpcAccessInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
