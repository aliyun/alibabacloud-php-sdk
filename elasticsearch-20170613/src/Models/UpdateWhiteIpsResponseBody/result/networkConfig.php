<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateWhiteIpsResponseBody\result;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateWhiteIpsResponseBody\result\networkConfig\whiteIpGroupList;
use AlibabaCloud\Tea\Model;

class networkConfig extends Model
{
    /**
     * @var whiteIpGroupList[]
     */
    public $whiteIpGroupList;
    protected $_name = [
        'whiteIpGroupList' => 'whiteIpGroupList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->whiteIpGroupList) {
            $res['whiteIpGroupList'] = [];
            if (null !== $this->whiteIpGroupList && \is_array($this->whiteIpGroupList)) {
                $n = 0;
                foreach ($this->whiteIpGroupList as $item) {
                    $res['whiteIpGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['whiteIpGroupList'])) {
            if (!empty($map['whiteIpGroupList'])) {
                $model->whiteIpGroupList = [];
                $n                       = 0;
                foreach ($map['whiteIpGroupList'] as $item) {
                    $model->whiteIpGroupList[$n++] = null !== $item ? whiteIpGroupList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
