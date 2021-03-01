<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class SynchronizeResourceRequest extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $resourceIds;
    protected $_name = [
        'type'        => 'Type',
        'resourceIds' => 'ResourceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SynchronizeResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = $map['ResourceIds'];
        }

        return $model;
    }
}
