<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAttachRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class accessList extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $attachState;

    /**
     * @example ON
     *
     * @var string
     */
    public $attachSwitch;

    /**
     * @example cd405430-c027-4937-8398-10152dac****
     *
     * @var string
     */
    public $ecsUUID;

    /**
     * @example success
     *
     * @var string
     */
    public $installMsg;

    /**
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
