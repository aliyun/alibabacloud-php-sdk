<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeScenesResponseBody\sceneList;

class DescribeScenesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sceneList[]
     */
    public $sceneList;
    protected $_name = [
        'requestId' => 'RequestId',
        'sceneList' => 'SceneList',
    ];

    public function validate()
    {
        if (\is_array($this->sceneList)) {
            Model::validateArray($this->sceneList);
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
            if (\is_array($this->sceneList)) {
                $res['SceneList'] = [];
                $n1 = 0;
                foreach ($this->sceneList as $item1) {
                    $res['SceneList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SceneList'])) {
            if (!empty($map['SceneList'])) {
                $model->sceneList = [];
                $n1 = 0;
                foreach ($map['SceneList'] as $item1) {
                    $model->sceneList[$n1] = sceneList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
