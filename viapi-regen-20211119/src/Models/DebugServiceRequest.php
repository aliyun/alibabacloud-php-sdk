<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models;

use AlibabaCloud\Tea\Model;

class DebugServiceRequest extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $param;
    protected $_name = [
        'id'    => 'Id',
        'param' => 'Param',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DebugServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }

        return $model;
    }
}
