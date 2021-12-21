<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListMainVersionsResponseBody\mainVersionList;
use AlibabaCloud\Tea\Model;

class ListMainVersionsResponseBody extends Model
{
    /**
     * @var mainVersionList[]
     */
    public $mainVersionList;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mainVersionList' => 'MainVersionList',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mainVersionList) {
            $res['MainVersionList'] = [];
            if (null !== $this->mainVersionList && \is_array($this->mainVersionList)) {
                $n = 0;
                foreach ($this->mainVersionList as $item) {
                    $res['MainVersionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMainVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MainVersionList'])) {
            if (!empty($map['MainVersionList'])) {
                $model->mainVersionList = [];
                $n                      = 0;
                foreach ($map['MainVersionList'] as $item) {
                    $model->mainVersionList[$n++] = null !== $item ? mainVersionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
