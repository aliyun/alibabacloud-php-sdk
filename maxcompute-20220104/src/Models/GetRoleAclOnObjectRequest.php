<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class GetRoleAclOnObjectRequest extends Model
{
    /**
     * @var string
     */
    public $objectName;

    /**
     * @var string
     */
    public $objectType;
    protected $_name = [
        'objectName' => 'objectName',
        'objectType' => 'objectType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->objectName) {
            $res['objectName'] = $this->objectName;
        }

        if (null !== $this->objectType) {
            $res['objectType'] = $this->objectType;
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
        if (isset($map['objectName'])) {
            $model->objectName = $map['objectName'];
        }

        if (isset($map['objectType'])) {
            $model->objectType = $map['objectType'];
        }

        return $model;
    }
}
