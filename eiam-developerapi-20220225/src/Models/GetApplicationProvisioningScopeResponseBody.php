<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class GetApplicationProvisioningScopeResponseBody extends Model
{
    /**
     * @description 机构ID列表
     *
     * @var string[]
     */
    public $organizationalUnitIds;
    protected $_name = [
        'organizationalUnitIds' => 'organizationalUnitIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationalUnitIds) {
            $res['organizationalUnitIds'] = $this->organizationalUnitIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApplicationProvisioningScopeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['organizationalUnitIds'])) {
            if (!empty($map['organizationalUnitIds'])) {
                $model->organizationalUnitIds = $map['organizationalUnitIds'];
            }
        }

        return $model;
    }
}
