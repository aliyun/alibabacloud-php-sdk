<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class PutLayerACLRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $acl;

    /**
     * @description Specifies whether the layer is a public layer. Valid values: true and false.
     *
     * @example true
     *
     * @deprecated
     *
     * @var string
     */
    public $public;
    protected $_name = [
        'acl'    => 'acl',
        'public' => 'public',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acl) {
            $res['acl'] = $this->acl;
        }
        if (null !== $this->public) {
            $res['public'] = $this->public;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutLayerACLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['acl'])) {
            $model->acl = $map['acl'];
        }
        if (isset($map['public'])) {
            $model->public = $map['public'];
        }

        return $model;
    }
}
