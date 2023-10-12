<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\RetryTasksRequest;

use AlibabaCloud\Tea\Model;

class retryTasks extends Model
{
    /**
     * @example DEVICE0489b577-33b3-4991-bdc5-1cdabc1a82e2
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example config_backup
     *
     * @var string
     */
    public $itemName;

    /**
     * @example SCRIPT0489b577-33b3-4991-bdc5-1cdabc1a82e2
     *
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'deviceId' => 'DeviceId',
        'itemName' => 'ItemName',
        'scriptId' => 'ScriptId',
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
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retryTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        return $model;
    }
}
