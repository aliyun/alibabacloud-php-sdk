<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class CreateSqlInstanceRequest extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $cu;

    /**
     * @var bool
     */
    public $useAsDefault;
    protected $_name = [
        'cu'           => 'cu',
        'useAsDefault' => 'useAsDefault',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cu) {
            $res['cu'] = $this->cu;
        }
        if (null !== $this->useAsDefault) {
            $res['useAsDefault'] = $this->useAsDefault;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSqlInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cu'])) {
            $model->cu = $map['cu'];
        }
        if (isset($map['useAsDefault'])) {
            $model->useAsDefault = $map['useAsDefault'];
        }

        return $model;
    }
}
