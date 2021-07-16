<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody\data\problem;

use AlibabaCloud\Tea\Model;

class coordinationGroups extends Model
{
    /**
     * @description 服务组名称
     *
     * @var string
     */
    public $serviceGroupName;

    /**
     * @description 服务Id
     *
     * @var int
     */
    public $serviceGroupId;

    /**
     * @description 服务组Maison
     *
     * @var string
     */
    public $serviceGroupDescription;
    protected $_name = [
        'serviceGroupName'        => 'serviceGroupName',
        'serviceGroupId'          => 'serviceGroupId',
        'serviceGroupDescription' => 'serviceGroupDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceGroupName) {
            $res['serviceGroupName'] = $this->serviceGroupName;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }
        if (null !== $this->serviceGroupDescription) {
            $res['serviceGroupDescription'] = $this->serviceGroupDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coordinationGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['serviceGroupName'])) {
            $model->serviceGroupName = $map['serviceGroupName'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }
        if (isset($map['serviceGroupDescription'])) {
            $model->serviceGroupDescription = $map['serviceGroupDescription'];
        }

        return $model;
    }
}
