<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Tea\Model;

class DeleteResourceShareRequest extends Model
{
    /**
     * @var string
     */
    public $resourceShareId;
    protected $_name = [
        'resourceShareId' => 'ResourceShareId',
    ];

    public function validate()
    {
        Model::validateRequired('resourceShareId', $this->resourceShareId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceShareId) {
            $res['ResourceShareId'] = $this->resourceShareId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteResourceShareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceShareId'])) {
            $model->resourceShareId = $map['ResourceShareId'];
        }

        return $model;
    }
}
