<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Tea\Model;

class ListWorkloadsRequest extends Model
{
    /**
     * @example common
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'scope' => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkloadsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
