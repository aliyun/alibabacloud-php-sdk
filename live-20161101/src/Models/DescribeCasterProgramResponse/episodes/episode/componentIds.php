<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramResponse\episodes\episode;

use AlibabaCloud\Tea\Model;

class componentIds extends Model
{
    /**
     * @description ComponentId
     *
     * @var string[]
     */
    public $componentId;
    protected $_name = [
        'componentId' => 'ComponentId',
    ];

    public function validate()
    {
        Model::validateRequired('componentId', $this->componentId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
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
        if (isset($map['ComponentId'])) {
            if (!empty($map['ComponentId'])) {
                $model->componentId = $map['ComponentId'];
            }
        }

        return $model;
    }
}
