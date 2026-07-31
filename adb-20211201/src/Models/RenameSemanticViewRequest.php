<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class RenameSemanticViewRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $newSchemaName;

    /**
     * @var string
     */
    public $newViewName;

    /**
     * @var string
     */
    public $oldSchemaName;

    /**
     * @var string
     */
    public $oldViewName;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'newSchemaName' => 'NewSchemaName',
        'newViewName' => 'NewViewName',
        'oldSchemaName' => 'OldSchemaName',
        'oldViewName' => 'OldViewName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->newSchemaName) {
            $res['NewSchemaName'] = $this->newSchemaName;
        }

        if (null !== $this->newViewName) {
            $res['NewViewName'] = $this->newViewName;
        }

        if (null !== $this->oldSchemaName) {
            $res['OldSchemaName'] = $this->oldSchemaName;
        }

        if (null !== $this->oldViewName) {
            $res['OldViewName'] = $this->oldViewName;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['NewSchemaName'])) {
            $model->newSchemaName = $map['NewSchemaName'];
        }

        if (isset($map['NewViewName'])) {
            $model->newViewName = $map['NewViewName'];
        }

        if (isset($map['OldSchemaName'])) {
            $model->oldSchemaName = $map['OldSchemaName'];
        }

        if (isset($map['OldViewName'])) {
            $model->oldViewName = $map['OldViewName'];
        }

        return $model;
    }
}
