<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class PatchGroupRequest extends Model
{
    /**
     * @example name001
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'groupName' => 'groupName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PatchGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }

        return $model;
    }
}
