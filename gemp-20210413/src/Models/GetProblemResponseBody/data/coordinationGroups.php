<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemResponseBody\data;

use AlibabaCloud\Tea\Model;

class coordinationGroups extends Model
{
    /**
     * @var int
     */
    public $isValid;

    /**
     * @example 1
     *
     * @var int
     */
    public $serviceGroupId;

    /**
     * @example 清扫大队
     *
     * @var string
     */
    public $serviceGroupName;
    protected $_name = [
        'isValid'          => 'isValid',
        'serviceGroupId'   => 'serviceGroupId',
        'serviceGroupName' => 'serviceGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isValid) {
            $res['isValid'] = $this->isValid;
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
        if (isset($map['isValid'])) {
            $model->isValid = $map['isValid'];
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
