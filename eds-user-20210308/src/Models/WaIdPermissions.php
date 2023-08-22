<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Tea\Model;

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
     * @var \AlibabaCloud\SDK\Edsuser\V20210308\Models\WaIdPermissions[]
     */
    public $subPermissions;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'code'           => 'Code',
        'isBasicChild'   => 'IsBasicChild',
        'name'           => 'Name',
        'subPermissions' => 'SubPermissions',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['SubPermissions'] = [];
            if (null !== $this->subPermissions && \is_array($this->subPermissions)) {
                $n = 0;
                foreach ($this->subPermissions as $item) {
                    $res['SubPermissions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WaIdPermissions
     */
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
                $n                     = 0;
                foreach ($map['SubPermissions'] as $item) {
                    $model->subPermissions[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
