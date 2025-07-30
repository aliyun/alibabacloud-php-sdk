<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class ResetSnapshotRequest extends Model
{
    /**
     * @description The client ID. The system generates a unique ID for each client.
     *
     * This parameter is required.
     *
     * @example b9d8ddfd-65d4-4857-9e97-56477d1f****
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The cloud computer ID.
     *
     * @example ecd-e964cr92klwqb****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The logon token.
     *
     * This parameter is required.
     *
     * @example v1fdef51b727aa91d6c881658978508114d3f5680fa99a66b2a631d17d5bb4860cccf1173be24d77d5ef1423c83aea****
     *
     * @var string
     */
    public $loginToken;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the list of regions where Elastic Desktop Service (EDS) Enterprise is available.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The session ID.
     *
     * @example 05182b8c-bb0d-49d3-963c-ee63a507****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description The snapshot ID.
     *
     * This parameter is required.
     *
     * @example s-2zeipxmnhej803x7****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description Specifies whether to stop the cloud computer.
     *
     * @example true
     *
     * @var bool
     */
    public $stopDesktop;
    protected $_name = [
        'clientId' => 'ClientId',
        'desktopId' => 'DesktopId',
        'loginToken' => 'LoginToken',
        'regionId' => 'RegionId',
        'sessionId' => 'SessionId',
        'snapshotId' => 'SnapshotId',
        'stopDesktop' => 'StopDesktop',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->stopDesktop) {
            $res['StopDesktop'] = $this->stopDesktop;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['StopDesktop'])) {
            $model->stopDesktop = $map['StopDesktop'];
        }

        return $model;
    }
}
