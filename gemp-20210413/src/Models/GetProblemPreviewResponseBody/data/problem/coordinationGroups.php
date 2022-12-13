<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemPreviewResponseBody\data\problem;

use AlibabaCloud\Tea\Model;

class coordinationGroups extends Model
{
    /**
     * @var string
     */
    public $serviceGroupDescription;

    /**
     * @example 1231
     *
     * @var int
     */
    public $serviceGroupId;

    /**
     * @var string
     */
    public $serviceGroupName;
    protected $_name = [
        'serviceGroupDescription' => 'serviceGroupDescription',
        'serviceGroupId'          => 'serviceGroupId',
        'serviceGroupName'        => 'serviceGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceGroupDescription) {
            $res['serviceGroupDescription'] = $this->serviceGroupDescription;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }
        if (null !== $this->serviceGroupName) {
            $res['serviceGroupName'] = $this->serviceGroupName;
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
        if (isset($map['serviceGroupDescription'])) {
            $model->serviceGroupDescription = $map['serviceGroupDescription'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }
        if (isset($map['serviceGroupName'])) {
            $model->serviceGroupName = $map['serviceGroupName'];
        }

        return $model;
    }
}
