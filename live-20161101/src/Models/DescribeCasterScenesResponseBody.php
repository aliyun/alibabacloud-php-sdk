<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponseBody\sceneList;

class DescribeCasterScenesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sceneList
     */
    public $sceneList;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId' => 'RequestId',
        'sceneList' => 'SceneList',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (null !== $this->sceneList) {
            $this->sceneList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sceneList) {
            $res['SceneList'] = null !== $this->sceneList ? $this->sceneList->toArray($noStream) : $this->sceneList;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SceneList'])) {
            $model->sceneList = sceneList::fromMap($map['SceneList']);
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
