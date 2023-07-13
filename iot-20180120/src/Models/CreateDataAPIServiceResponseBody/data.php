<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateDataAPIServiceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example acs:iot:*:127103983461****:serveapi/device/getDeviceCountByStatus2
     *
     * @var string
     */
    public $apiSrn;

    /**
     * @example 1557839468865
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1557839468865
     *
     * @var int
     */
    public $lastUpdateTime;
    protected $_name = [
        'apiSrn'         => 'ApiSrn',
        'createTime'     => 'CreateTime',
        'lastUpdateTime' => 'LastUpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiSrn) {
            $res['ApiSrn'] = $this->apiSrn;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiSrn'])) {
            $model->apiSrn = $map['ApiSrn'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }

        return $model;
    }
}
