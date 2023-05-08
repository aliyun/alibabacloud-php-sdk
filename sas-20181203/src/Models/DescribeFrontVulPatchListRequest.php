<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeFrontVulPatchListRequest extends Model
{
    /**
     * @example [{"name":"5000803","uuid":"026c9296-1234-5678-b937-a7d81f05****","tag":"system"}]
     *
     * @var string
     */
    public $info;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example vul_fix
     *
     * @var string
     */
    public $operateType;

    /**
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
