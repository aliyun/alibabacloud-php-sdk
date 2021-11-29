<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeConfigGroupDetailRequest extends Model
{
    /**
     * @var string
     */
    public $configGroupId;

    /**
     * @var string
     */
    public $configGroupName;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'configGroupId'   => 'ConfigGroupId',
        'configGroupName' => 'ConfigGroupName',
        'ownerId'         => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configGroupId) {
            $res['ConfigGroupId'] = $this->configGroupId;
        }
        if (null !== $this->configGroupName) {
            $res['ConfigGroupName'] = $this->configGroupName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigGroupDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigGroupId'])) {
            $model->configGroupId = $map['ConfigGroupId'];
        }
        if (isset($map['ConfigGroupName'])) {
            $model->configGroupName = $map['ConfigGroupName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
