<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyOperateVulRequest extends Model
{
    /**
     * @description The operation that you want to perform on the vulnerability. Valid values:
     *
     *   **vul_fix**: fixes the vulnerability.
     *   **vul_verify**: verifies the vulnerability fix.
     *   **vul_ignore**: ignores the vulnerability.
     *   **vul_undo_ignore**: cancels ignoring the vulnerability.
     *   **vul_delete**: deletes the vulnerability.
     *
     * @example [{"name":"alilinux2:2.1903:ALINUX2-SA-2022:0007","uuid":"a3bb82a8-a3bd-4546-acce-45ac34af****","tag":"oval","isFront":0},{"name":"alilinux2:2.1903:ALINUX2-SA-2022:0007","uuid":"98a6fecc-88cd-46f2-8e35-f808a388****","tag":"oval","isFront":0}]
     *
     * @var string
     */
    public $info;

    /**
     * @description Handles detected vulnerabilities. You can fix or ignore vulnerabilities. You can also verify the vulnerability fixes.
     *
     * @example vul_fix
     *
     * @var string
     */
    public $operateType;

    /**
     * @example not operate
     *
     * @var string
     */
    public $reason;

    /**
     * @description ModifyOperateVul
     *
     * @example cve
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'info'        => 'Info',
        'operateType' => 'OperateType',
        'reason'      => 'Reason',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
