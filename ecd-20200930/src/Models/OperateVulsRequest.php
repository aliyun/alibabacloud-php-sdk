<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class OperateVulsRequest extends Model
{
    /**
     * @description The IDs of the cloud desktops.
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @description The action that you want to perform on the vulnerability. Valid values:
     *
     *   vul_fix: fixes the vulnerability.
     *   vul_verify: verifies whether the vulnerability is fixed. You must perform this action after the vulnerability is fixed and the cloud desktop is restarted.
     *   vul_ignore: ignores the vulnerability. After the vulnerability is ignored, the system provides no more prompts about the vulnerability.
     *   vul_undo_ignore: cancels the ignore action on the vulnerability. After you cancel the ignore action on the vulnerability, the system provides prompts about the vulnerability again.
     *
     * @example vul_fix
     *
     * @var string
     */
    public $operateType;

    /**
     * @description Specifies whether to record the previous state of the vulnerability. Valid values:
     *
     *   0: records the previous state of the vulnerability.
     *   1: does not record the previous state of the vulnerability.
     *
     * @example 1
     *
     * @var int
     */
    public $precondition;

    /**
     * @description The reason why the vulnerability is ignored.\
     * This parameter is required only when `OperateType` is set to `vul_ignore`.
     * @example Fix the vulnerability later.
     *
     * @var string
     */
    public $reason;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the detected vulnerability. Valid values:
     *
     *   cve: the Linux software vulnerability
     *   sys: the Windows system vulnerability
     *
     * @example sys
     *
     * @var string
     */
    public $type;

    /**
     * @description The names of the vulnerabilities.
     *
     * @var string[]
     */
    public $vulName;
    protected $_name = [
        'desktopId'    => 'DesktopId',
        'operateType'  => 'OperateType',
        'precondition' => 'Precondition',
        'reason'       => 'Reason',
        'regionId'     => 'RegionId',
        'type'         => 'Type',
        'vulName'      => 'VulName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->precondition) {
            $res['Precondition'] = $this->precondition;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vulName) {
            $res['VulName'] = $this->vulName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateVulsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['Precondition'])) {
            $model->precondition = $map['Precondition'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VulName'])) {
            if (!empty($map['VulName'])) {
                $model->vulName = $map['VulName'];
            }
        }

        return $model;
    }
}
