<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudInterruptIvrRequest extends Model
{
    /**
     * @var string
     */
    public $checkName;

    /**
     * @var string
     */
    public $checkValue;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $uniqueId;

    /**
     * @var string
     */
    public $userField;
    protected $_name = [
        'checkName' => 'CheckName',
        'checkValue' => 'CheckValue',
        'enterpriseId' => 'EnterpriseId',
        'uniqueId' => 'UniqueId',
        'userField' => 'UserField',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }

        if (null !== $this->checkValue) {
            $res['CheckValue'] = $this->checkValue;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }

        if (null !== $this->userField) {
            $res['UserField'] = $this->userField;
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
        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }

        if (isset($map['CheckValue'])) {
            $model->checkValue = $map['CheckValue'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        if (isset($map['UserField'])) {
            $model->userField = $map['UserField'];
        }

        return $model;
    }
}
