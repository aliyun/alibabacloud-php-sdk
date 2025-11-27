<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\PrecheckDuckDBDependencyResponseBody;

use AlibabaCloud\Dara\Model;

class failedCheckItems extends Model
{
    /**
     * @var bool
     */
    public $allowAutoModify;

    /**
     * @var string
     */
    public $currentValue;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requiredValue;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'allowAutoModify' => 'AllowAutoModify',
        'currentValue' => 'CurrentValue',
        'name' => 'Name',
        'requiredValue' => 'RequiredValue',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowAutoModify) {
            $res['AllowAutoModify'] = $this->allowAutoModify;
        }

        if (null !== $this->currentValue) {
            $res['CurrentValue'] = $this->currentValue;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->requiredValue) {
            $res['RequiredValue'] = $this->requiredValue;
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
        if (isset($map['AllowAutoModify'])) {
            $model->allowAutoModify = $map['AllowAutoModify'];
        }

        if (isset($map['CurrentValue'])) {
            $model->currentValue = $map['CurrentValue'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RequiredValue'])) {
            $model->requiredValue = $map['RequiredValue'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
