<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindDirectoriesResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @example 348*****380-cn-qingdao
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 399*****488-cn-qingdao
     *
     * @var string
     */
    public $directoryId;

    /**
     * @example An error occurred while processing your request.
     *
     * @var string
     */
    public $error;
    protected $_name = [
        'deviceId'    => 'DeviceId',
        'directoryId' => 'DirectoryId',
        'error'       => 'Error',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        return $model;
    }
}
