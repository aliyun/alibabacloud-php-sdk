<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiProductApisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiProductApisResponseBody\apiInfoList\apiInfo;

class apiInfoList extends Model
{
    /**
     * @var apiInfo[]
     */
    public $apiInfo;
    protected $_name = [
        'apiInfo' => 'ApiInfo',
    ];

    public function validate()
    {
        if (\is_array($this->apiInfo)) {
            Model::validateArray($this->apiInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiInfo) {
            if (\is_array($this->apiInfo)) {
                $res['ApiInfo'] = [];
                $n1 = 0;
                foreach ($this->apiInfo as $item1) {
                    $res['ApiInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiInfo'])) {
            if (!empty($map['ApiInfo'])) {
                $model->apiInfo = [];
                $n1 = 0;
                foreach ($map['ApiInfo'] as $item1) {
                    $model->apiInfo[$n1] = apiInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
