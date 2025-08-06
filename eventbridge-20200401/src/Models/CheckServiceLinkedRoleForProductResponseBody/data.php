<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CheckServiceLinkedRoleForProductResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $checkPass;

    /**
     * @var string
     */
    public $stsRoleName;
    protected $_name = [
        'checkPass' => 'CheckPass',
        'stsRoleName' => 'StsRoleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkPass) {
            $res['CheckPass'] = $this->checkPass;
        }

        if (null !== $this->stsRoleName) {
            $res['StsRoleName'] = $this->stsRoleName;
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
        if (isset($map['CheckPass'])) {
            $model->checkPass = $map['CheckPass'];
        }

        if (isset($map['StsRoleName'])) {
            $model->stsRoleName = $map['StsRoleName'];
        }

        return $model;
    }
}
