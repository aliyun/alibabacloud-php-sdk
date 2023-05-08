<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateVulsRequest extends Model
{
    /**
     * @example vul_fix
     *
     * @var string
     */
    public $operateType;

    /**
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $uuids;

    /**
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
