<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateWhiteIpsResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateWhiteIpsResponseBody\result\networkConfig\whiteIpGroupList;

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
        if (\is_array($this->whiteIpGroupList)) {
            Model::validateArray($this->whiteIpGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->whiteIpGroupList) {
            if (\is_array($this->whiteIpGroupList)) {
                $res['whiteIpGroupList'] = [];
                $n1 = 0;
                foreach ($this->whiteIpGroupList as $item1) {
                    $res['whiteIpGroupList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['whiteIpGroupList'])) {
            if (!empty($map['whiteIpGroupList'])) {
                $model->whiteIpGroupList = [];
                $n1 = 0;
                foreach ($map['whiteIpGroupList'] as $item1) {
                    $model->whiteIpGroupList[$n1] = whiteIpGroupList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
