<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeServcieScheduleRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $podConfigName;
    protected $_name = [
        'appId'         => 'AppId',
        'uuid'          => 'Uuid',
        'podConfigName' => 'PodConfigName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->podConfigName) {
            $res['PodConfigName'] = $this->podConfigName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServcieScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['PodConfigName'])) {
            $model->podConfigName = $map['PodConfigName'];
        }

        return $model;
    }
}
