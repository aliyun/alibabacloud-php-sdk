<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyOperateVulRequest\vulInfo;
use AlibabaCloud\Tea\Model;

class ModifyOperateVulRequest extends Model
{
    /**
     * @description The action that you want to perform on the vulnerability. Valid values:
     *
     *   vul_fix: fixes the vulnerability. The system fixes the vulnerability.
     *   vul_verify: verifies whether the vulnerability is fixed. You must perform this action after the vulnerability is fixed, and the cloud desktop is restarted.
     *   vul_ignore: ignores the vulnerability. After the vulnerability is ignored, the system provides no more prompts about the vulnerability.
     *   vul_undo_ignore: cancels the ignore action on the vulnerability. After you cancel the ignore action on the vulnerability, the system provides prompts about the vulnerability again.
     *
     * @example vul_fix
     *
     * @var string
     */
    public $operateType;

    /**
     * @description The reason why the vulnerability is ignored.\
     * This parameter is required only when `OperateType` is set to `vul_ignore`.
     * @example Postpone the fix
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
     * @description The type of the vulnerability. Valid values:
     *
     *   cve: the Linux software vulnerability
     *   sys: the Windows system vulnerability
     *
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @description Details of the vulnerabilities.
     *
     * @var vulInfo[]
     */
    public $vulInfo;
    protected $_name = [
        'operateType' => 'OperateType',
        'reason'      => 'Reason',
        'regionId'    => 'RegionId',
        'type'        => 'Type',
        'vulInfo'     => 'VulInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
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
        if (null !== $this->vulInfo) {
            $res['VulInfo'] = [];
            if (null !== $this->vulInfo && \is_array($this->vulInfo)) {
                $n = 0;
                foreach ($this->vulInfo as $item) {
                    $res['VulInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyOperateVulRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
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
        if (isset($map['VulInfo'])) {
            if (!empty($map['VulInfo'])) {
                $model->vulInfo = [];
                $n              = 0;
                foreach ($map['VulInfo'] as $item) {
                    $model->vulInfo[$n++] = null !== $item ? vulInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
