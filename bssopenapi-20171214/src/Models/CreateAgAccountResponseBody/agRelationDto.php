<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateAgAccountResponseBody;

use AlibabaCloud\Dara\Model;

class agRelationDto extends Model
{
    /**
     * @var string
     */
    public $mpk;

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
    public $type;
    protected $_name = [
        'mpk' => 'Mpk',
        'pk' => 'Pk',
        'ramAdminRoleName' => 'RamAdminRoleName',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
