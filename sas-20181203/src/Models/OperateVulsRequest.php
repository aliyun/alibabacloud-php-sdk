<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateVulsRequest extends Model
{
    /**
     * @description The operation on the vulnerabilities. Set the value to **vul_fix**, which indicates vulnerability fixing.
     *
     * @example vul_fix
     *
     * @var string
     */
    public $operateType;

    /**
     * @description The type of the vulnerabilities that you want to fix. Set the value to **cve**, which indicates Linux software vulnerabilities.
     *
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @description The UUIDs of servers for which you want to fix vulnerabilities.
     *
     * @var string[]
     */
    public $uuids;

    /**
     * @description The names of the vulnerabilities that you want to fix.
     *
     * @var string[]
     */
    public $vulNames;
    protected $_name = [
        'operateType' => 'OperateType',
        'type'        => 'Type',
        'uuids'       => 'Uuids',
        'vulNames'    => 'VulNames',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }
        if (null !== $this->vulNames) {
            $res['VulNames'] = $this->vulNames;
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
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = $map['Uuids'];
            }
        }
        if (isset($map['VulNames'])) {
            if (!empty($map['VulNames'])) {
                $model->vulNames = $map['VulNames'];
            }
        }

        return $model;
    }
}
