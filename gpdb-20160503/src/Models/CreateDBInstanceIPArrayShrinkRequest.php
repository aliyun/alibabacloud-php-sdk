<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class CreateDBInstanceIPArrayShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $IPArrayAttribute;

    /**
     * @var string
     */
    public $IPArrayName;

    /**
     * @var string
     */
    public $securityIPListShrink;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'IPArrayAttribute' => 'IPArrayAttribute',
        'IPArrayName' => 'IPArrayName',
        'securityIPListShrink' => 'SecurityIPList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->IPArrayAttribute) {
            $res['IPArrayAttribute'] = $this->IPArrayAttribute;
        }

        if (null !== $this->IPArrayName) {
            $res['IPArrayName'] = $this->IPArrayName;
        }

        if (null !== $this->securityIPListShrink) {
            $res['SecurityIPList'] = $this->securityIPListShrink;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['IPArrayAttribute'])) {
            $model->IPArrayAttribute = $map['IPArrayAttribute'];
        }

        if (isset($map['IPArrayName'])) {
            $model->IPArrayName = $map['IPArrayName'];
        }

        if (isset($map['SecurityIPList'])) {
            $model->securityIPListShrink = $map['SecurityIPList'];
        }

        return $model;
    }
}
