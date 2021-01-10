<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterScenesResponseBody\sceneList\scene;

use AlibabaCloud\Tea\Model;

class componentIds extends Model
{
    /**
     * @var string[]
     */
    public $componentId;
    protected $_name = [
        'componentId' => 'componentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentId) {
            $res['componentId'] = $this->componentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['componentId'])) {
            if (!empty($map['componentId'])) {
                $model->componentId = $map['componentId'];
            }
        }

        return $model;
    }
}
