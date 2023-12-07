<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListLineageResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListLineageResponseBody\data\dataEntityList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var dataEntityList[]
     */
    public $dataEntityList;

    /**
     * @example nextTokenFromRequest-xxxsd-ff
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'dataEntityList' => 'DataEntityList',
        'nextToken'      => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataEntityList) {
            $res['DataEntityList'] = [];
            if (null !== $this->dataEntityList && \is_array($this->dataEntityList)) {
                $n = 0;
                foreach ($this->dataEntityList as $item) {
                    $res['DataEntityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataEntityList'])) {
            if (!empty($map['DataEntityList'])) {
                $model->dataEntityList = [];
                $n                     = 0;
                foreach ($map['DataEntityList'] as $item) {
                    $model->dataEntityList[$n++] = null !== $item ? dataEntityList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
