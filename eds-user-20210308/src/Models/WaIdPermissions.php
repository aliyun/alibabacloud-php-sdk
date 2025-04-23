<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;

class WaIdPermissions extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isBasicChild;

    /**
     * @var string
     */
    public $name;

    /**
     * @var WaIdPermissions[]
     */
    public $subPermissions;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'code' => 'Code',
        'isBasicChild' => 'IsBasicChild',
        'name' => 'Name',
        'subPermissions' => 'SubPermissions',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->subPermissions)) {
            Model::validateArray($this->subPermissions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->isBasicChild) {
            $res['IsBasicChild'] = $this->isBasicChild;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->subPermissions) {
            if (\is_array($this->subPermissions)) {
                $res['SubPermissions'] = [];
                $n1 = 0;
                foreach ($this->subPermissions as $item1) {
                    $res['SubPermissions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['IsBasicChild'])) {
            $model->isBasicChild = $map['IsBasicChild'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SubPermissions'])) {
            if (!empty($map['SubPermissions'])) {
                $model->subPermissions = [];
                $n1 = 0;
                foreach ($map['SubPermissions'] as $item1) {
                    $model->subPermissions[$n1++] = self::fromMap($item1);
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
