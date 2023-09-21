<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAttachRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class accessList extends Model
{
    /**
     * @description The status of connecting applications on the ECS instance to the application protection feature. Valid values:
     *
     *   **0**: All applications are connected to the application protection feature.
     *   **1**: Partial applications are connected to the application protection feature.
     *   **2**: Applications failed to be connected to the application protection feature.
     *   **3**: Applications are being connected to the application protection feature.
     *   **4**: Applications are not connected to the application protection feature.
     *
     * @example 0
     *
     * @var int
     */
    public $attachState;

    /**
     * @description Indicates whether automatic protection is enabled for the applications on the ECS instance. Valid values:
     *
     *   **ON**: Automatic protection is enabled for the applications on the ECS instance.
     *   **OFF**: Automatic protection is disabled for the applications on the ECS instance.
     *
     * @example ON
     *
     * @var string
     */
    public $attachSwitch;

    /**
     * @description The UUID of the ECS instance.
     *
     * @example cd405430-c027-4937-8398-10152dac****
     *
     * @var string
     */
    public $ecsUUID;

    /**
     * @description The message that shows the results of installing the RASP agent on the ECS instance.
     *
     * @example success
     *
     * @var string
     */
    public $installMsg;

    /**
     * @description The status of installing the RASP agent on the ECS instance to enable automatic application connection. Valid values:
     *
     *   **0**: installed
     *   **1**: installing
     *   **2**: installation failed
     *   **3**: installation timeout
     *   **4**: uninstalled
     *   **5**: uninstalling
     *   **6**: uninstallation failed
     *   **7**: uninstallation timeout
     *
     * @example 0
     *
     * @var int
     */
    public $installState;
    protected $_name = [
        'attachState'  => 'AttachState',
        'attachSwitch' => 'AttachSwitch',
        'ecsUUID'      => 'EcsUUID',
        'installMsg'   => 'InstallMsg',
        'installState' => 'InstallState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachState) {
            $res['AttachState'] = $this->attachState;
        }
        if (null !== $this->attachSwitch) {
            $res['AttachSwitch'] = $this->attachSwitch;
        }
        if (null !== $this->ecsUUID) {
            $res['EcsUUID'] = $this->ecsUUID;
        }
        if (null !== $this->installMsg) {
            $res['InstallMsg'] = $this->installMsg;
        }
        if (null !== $this->installState) {
            $res['InstallState'] = $this->installState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachState'])) {
            $model->attachState = $map['AttachState'];
        }
        if (isset($map['AttachSwitch'])) {
            $model->attachSwitch = $map['AttachSwitch'];
        }
        if (isset($map['EcsUUID'])) {
            $model->ecsUUID = $map['EcsUUID'];
        }
        if (isset($map['InstallMsg'])) {
            $model->installMsg = $map['InstallMsg'];
        }
        if (isset($map['InstallState'])) {
            $model->installState = $map['InstallState'];
        }

        return $model;
    }
}
