<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ModifyAndroidInstanceRequest extends Model
{
    /**
     * @description The ID of the cloud phone instance.
     *
     * @example acp-8v5bjld0r7tkl****
     *
     * @var string
     */
    public $androidInstanceId;

    /**
     * @var int
     */
    public $downBandwidthLimit;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The new name of the cloud phone instance.
     *
     * >  The name can be up to 30 characters in length. It can contain letters, digits, colons (:), underscores (_), periods (.), or hyphens (-). It must start with letters but cannot start with http:// or https://.
     *
     * @example new_name
     *
     * @var string
     */
    public $newAndroidInstanceName;

    /**
     * @var int
     */
    public $upBandwidthLimit;
    protected $_name = [
        'androidInstanceId' => 'AndroidInstanceId',
        'downBandwidthLimit' => 'DownBandwidthLimit',
        'instanceIds' => 'InstanceIds',
        'newAndroidInstanceName' => 'NewAndroidInstanceName',
        'upBandwidthLimit' => 'UpBandwidthLimit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceId) {
            $res['AndroidInstanceId'] = $this->androidInstanceId;
        }
        if (null !== $this->downBandwidthLimit) {
            $res['DownBandwidthLimit'] = $this->downBandwidthLimit;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->newAndroidInstanceName) {
            $res['NewAndroidInstanceName'] = $this->newAndroidInstanceName;
        }
        if (null !== $this->upBandwidthLimit) {
            $res['UpBandwidthLimit'] = $this->upBandwidthLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAndroidInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceId'])) {
            $model->androidInstanceId = $map['AndroidInstanceId'];
        }
        if (isset($map['DownBandwidthLimit'])) {
            $model->downBandwidthLimit = $map['DownBandwidthLimit'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['NewAndroidInstanceName'])) {
            $model->newAndroidInstanceName = $map['NewAndroidInstanceName'];
        }
        if (isset($map['UpBandwidthLimit'])) {
            $model->upBandwidthLimit = $map['UpBandwidthLimit'];
        }

        return $model;
    }
}
