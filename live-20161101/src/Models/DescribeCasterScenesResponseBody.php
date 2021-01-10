<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponseBody\sceneList;
use AlibabaCloud\Tea\Model;

class DescribeCasterScenesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var sceneList
     */
    public $sceneList;
    protected $_name = [
        'requestId' => 'RequestId',
        'total'     => 'Total',
        'sceneList' => 'SceneList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->sceneList) {
            $res['SceneList'] = null !== $this->sceneList ? $this->sceneList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterScenesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['SceneList'])) {
            $model->sceneList = sceneList::fromMap($map['SceneList']);
        }

        return $model;
    }
}
