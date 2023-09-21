<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyOperateVulRequest extends Model
{
    /**
     * @var string
     */
    public $from;

    /**
     * @description The details of the vulnerability. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **name**: the name of the vulnerability.
     *
     *   **uuid**: the UUID of the server on which the vulnerability is detected.
     *
     *   **tag**: the tag that is added to the vulnerability. Valid values:
     *
     *   **oval**: Linux software vulnerability
     *   **system**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *
     * >  You can call the [DescribeVulList](~~DescribeVulList~~) operation to query the tags that are added to vulnerabilities of other types.
     *
     *   **isFront**: specifies whether a pre-patch is required to fix the Windows system vulnerability. This field is required only for Windows system vulnerabilities. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * >  You can fix multiple vulnerabilities at a time. Separate the details of multiple vulnerabilities with commas (,). You can call the [DescribeVulLIst](~~DescribeVulList~~) operation to query the details of vulnerabilities.
     * @example [{"name":"alilinux2:2.1903:ALINUX2-SA-2022:0007","uuid":"a3bb82a8-a3bd-4546-acce-45ac34af****","tag":"oval","isFront":0},{"name":"alilinux2:2.1903:ALINUX2-SA-2022:0007","uuid":"98a6fecc-88cd-46f2-8e35-f808a388****","tag":"oval","isFront":0}]
     *
     * @var string
     */
    public $info;

    /**
     * @description The operation that you want to perform on the vulnerability. Valid values:
     *
     *   **vul_fix**: fixes the vulnerability.
     *   **vul_verify**: verifies the vulnerability fix.
     *   **vul_ignore**: ignores the vulnerability.
     *   **vul\_undo_ignore**: cancels ignoring the vulnerability.
     *   **vul_delete**: deletes the vulnerability.
     *
     * @example vul_fix
     *
     * @var string
     */
    public $operateType;

    /**
     * @description The reason why the vulnerability is **ignored**.
     *
     * >  This parameter is required only when you set **OperateType** to **vul_ignore**.
     * @example not operate
     *
     * @var string
     */
    public $reason;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   **cve**: Linux software vulnerability
     *   **sys**: Windows system vulnerability
     *   **cms**: Web-CMS vulnerability
     *   **emg**: urgent vulnerability
     *   **app**: application vulnerability
     *   **sca**: vulnerability that is detected based on software component analysis
     *
     * >  You cannot fix the urgent vulnerabilities, application vulnerabilities, or vulnerabilities that are detected based on software component analysis.
     * @example cve
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'from'        => 'From',
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
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
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
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
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
