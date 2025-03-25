<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRoleAclOnObjectResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The operations that were performed on the object.
     *
     * @var string[]
     */
    public $actions;
    protected $_name = [
        'actions' => 'actions',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['actions'] = $this->actions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = $map['actions'];
            }
        }

        return $model;
    }
}
