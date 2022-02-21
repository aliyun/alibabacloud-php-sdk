<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAIConfigListResponseBody;

use AlibabaCloud\Tea\Model;

class AIConfigList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAIConfigListResponseBody\AIConfigList\AIConfigList[]
     */
    public $AIConfigList;
    protected $_name = [
        'AIConfigList' => 'AIConfigList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIConfigList) {
            $res['AIConfigList'] = [];
            if (null !== $this->AIConfigList && \is_array($this->AIConfigList)) {
                $n = 0;
                foreach ($this->AIConfigList as $item) {
                    $res['AIConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AIConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIConfigList'])) {
            if (!empty($map['AIConfigList'])) {
                $model->AIConfigList = [];
                $n                   = 0;
                foreach ($map['AIConfigList'] as $item) {
                    $model->AIConfigList[$n++] = null !== $item ? \AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAIConfigListResponseBody\AIConfigList\AIConfigList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
