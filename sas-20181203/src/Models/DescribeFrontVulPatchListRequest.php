<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeFrontVulPatchListRequest extends Model
{
    /**
     * @description The information about the Windows system vulnerability. The value is a JSON string that contains the following fields:
     *
     *   **name**: the name of the vulnerability.
     *   **uuid**: the UUID of the server on which the vulnerability is detected.
     *   **tag**: the tag that is added to the vulnerability. Set this field to **system**, which indicates Windows system vulnerabilities.
     *
     * @example [{"name":"5000803","uuid":"026c9296-1234-5678-b937-a7d81f05****","tag":"system"}]
     *
     * @var string
     */
    public $info;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The operation that you want to perform on the vulnerability. Set the value to **vul_fix**, which indicates vulnerability fixing.
     *
     * @example vul_fix
     *
     * @var string
     */
    public $operateType;

    /**
     * @description The type of the vulnerability. Set the value to **sys**, which indicates Windows system vulnerabilities.
     *
     * @example sys
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'info'        => 'Info',
        'lang'        => 'Lang',
        'operateType' => 'OperateType',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFrontVulPatchListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
