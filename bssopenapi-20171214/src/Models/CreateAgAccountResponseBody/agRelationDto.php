<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateAgAccountResponseBody;

use AlibabaCloud\Tea\Model;

class agRelationDto extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var string
     */
    public $ramAdminRoleName;

    /**
     * @var string
     */
    public $mpk;
    protected $_name = [
        'type'             => 'Type',
        'pk'               => 'Pk',
        'ramAdminRoleName' => 'RamAdminRoleName',
        'mpk'              => 'Mpk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }
        if (null !== $this->ramAdminRoleName) {
            $res['RamAdminRoleName'] = $this->ramAdminRoleName;
        }
        if (null !== $this->mpk) {
            $res['Mpk'] = $this->mpk;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }
        if (isset($map['RamAdminRoleName'])) {
            $model->ramAdminRoleName = $map['RamAdminRoleName'];
        }
        if (isset($map['Mpk'])) {
            $model->mpk = $map['Mpk'];
        }

        return $model;
    }
}
