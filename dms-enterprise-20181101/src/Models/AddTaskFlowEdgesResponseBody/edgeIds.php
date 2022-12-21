<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AddTaskFlowEdgesResponseBody;

use AlibabaCloud\Tea\Model;

class edgeIds extends Model
{
    /**
     * @var int[]
     */
    public $edgeId;
    protected $_name = [
        'edgeId' => 'EdgeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edgeId) {
            $res['EdgeId'] = $this->edgeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return edgeIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EdgeId'])) {
            if (!empty($map['EdgeId'])) {
                $model->edgeId = $map['EdgeId'];
            }
        }

        return $model;
    }
}
