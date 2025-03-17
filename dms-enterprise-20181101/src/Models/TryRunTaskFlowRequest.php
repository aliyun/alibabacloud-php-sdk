<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class TryRunTaskFlowRequest extends Model
{
    /**
     * @example 11****
     *
     * @var int
     */
    public $dagId;
    protected $_name = [
        'dagId' => 'DagId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TryRunTaskFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }

        return $model;
    }
}
