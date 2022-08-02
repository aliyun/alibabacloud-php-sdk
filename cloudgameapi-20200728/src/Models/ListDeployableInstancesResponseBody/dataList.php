<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListDeployableInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $cloudGameInstanceId;

    /**
     * @var string
     */
    public $cloudGameInstanceName;
    protected $_name = [
        'cloudGameInstanceId'   => 'CloudGameInstanceId',
        'cloudGameInstanceName' => 'CloudGameInstanceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudGameInstanceId) {
            $res['CloudGameInstanceId'] = $this->cloudGameInstanceId;
        }
        if (null !== $this->cloudGameInstanceName) {
            $res['CloudGameInstanceName'] = $this->cloudGameInstanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudGameInstanceId'])) {
            $model->cloudGameInstanceId = $map['CloudGameInstanceId'];
        }
        if (isset($map['CloudGameInstanceName'])) {
            $model->cloudGameInstanceName = $map['CloudGameInstanceName'];
        }

        return $model;
    }
}
