<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class GetExperimentVisualizationMetaRequest extends Model
{
    /**
     * @example node_id1,node_id2
     *
     * @var string
     */
    public $nodeIds;
    protected $_name = [
        'nodeIds' => 'NodeIds',
    ];

    public function validate()
    {
    }

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
     * @return GetExperimentVisualizationMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeIds'])) {
            $model->nodeIds = $map['NodeIds'];
        }

        return $model;
    }
}
