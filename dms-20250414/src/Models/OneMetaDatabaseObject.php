<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class OneMetaDatabaseObject extends Model
{
    /**
     * @var string
     */
    public $objectName;

    /**
     * @var string
     */
    public $objectQualifiedName;

    /**
     * @var string
     */
    public $objectType;
    protected $_name = [
        'objectName' => 'ObjectName',
        'objectQualifiedName' => 'ObjectQualifiedName',
        'objectType' => 'ObjectType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }

        if (null !== $this->objectQualifiedName) {
            $res['ObjectQualifiedName'] = $this->objectQualifiedName;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
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
        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }

        if (isset($map['ObjectQualifiedName'])) {
            $model->objectQualifiedName = $map['ObjectQualifiedName'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        return $model;
    }
}
