<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateAgAccountResponseBody;

use AlibabaCloud\Tea\Model;

class agRelationDto extends Model
{
    /**
     * @description MPK（UID）
     *
     * @example 1785287436011964
     *
     * @var string
     */
    public $mpk;

    /**
     * @example 1728240534507590
     *
     * @var string
     */
    public $pk;

    /**
     * @example admin-role
     *
     * @var string
     */
    public $ramAdminRoleName;

    /**
     * @example FINACE_CLOUD
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'mpk'              => 'Mpk',
        'pk'               => 'Pk',
        'ramAdminRoleName' => 'RamAdminRoleName',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mpk) {
            $res['Mpk'] = $this->mpk;
        }
        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }
        if (null !== $this->ramAdminRoleName) {
            $res['RamAdminRoleName'] = $this->ramAdminRoleName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agRelationDto
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mpk'])) {
            $model->mpk = $map['Mpk'];
        }
        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }
        if (isset($map['RamAdminRoleName'])) {
            $model->ramAdminRoleName = $map['RamAdminRoleName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
