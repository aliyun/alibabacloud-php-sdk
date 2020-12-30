<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisesResponseBody\uises\uis;

use AlibabaCloud\Tea\Model;

class uisNodeIds extends Model
{
    /**
     * @var string[]
     */
    public $uisNodeIds;
    protected $_name = [
        'uisNodeIds' => 'UisNodeIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uisNodeIds) {
            $res['UisNodeIds'] = $this->uisNodeIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uisNodeIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UisNodeIds'])) {
            if (!empty($map['UisNodeIds'])) {
                $model->uisNodeIds = $map['UisNodeIds'];
            }
        }

        return $model;
    }
}
