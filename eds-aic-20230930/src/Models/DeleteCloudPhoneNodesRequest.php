<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DeleteCloudPhoneNodesRequest extends Model
{
    /**
     * @description The cloud phone matrix IDs.
     *
     * @var string[]
     */
    public $nodeIds;
    protected $_name = [
        'nodeIds' => 'NodeIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCloudPhoneNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
        }

        return $model;
    }
}
