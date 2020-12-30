<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc;

use AlibabaCloud\Tea\Model;

class routerTableIds extends Model
{
    /**
     * @var string[]
     */
    public $routerTableIds;
    protected $_name = [
        'routerTableIds' => 'RouterTableIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routerTableIds) {
            $res['RouterTableIds'] = $this->routerTableIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routerTableIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouterTableIds'])) {
            if (!empty($map['RouterTableIds'])) {
                $model->routerTableIds = $map['RouterTableIds'];
            }
        }

        return $model;
    }
}
