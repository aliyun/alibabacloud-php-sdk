<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListArchitectureAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class architecture extends Model
{
    /**
     * @var string[]
     */
    public $model;

    /**
     * @example ASW
     *
     * @var string[]
     */
    public $role;

    /**
     * @var string[]
     */
    public $vendor;
    protected $_name = [
        'model'  => 'Model',
        'role'   => 'Role',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return architecture
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Model'])) {
            if (!empty($map['Model'])) {
                $model->model = $map['Model'];
            }
        }
        if (isset($map['Role'])) {
            if (!empty($map['Role'])) {
                $model->role = $map['Role'];
            }
        }
        if (isset($map['Vendor'])) {
            if (!empty($map['Vendor'])) {
                $model->vendor = $map['Vendor'];
            }
        }

        return $model;
    }
}
