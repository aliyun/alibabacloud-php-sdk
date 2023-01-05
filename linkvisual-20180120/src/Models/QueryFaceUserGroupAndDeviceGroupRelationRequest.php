<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryFaceUserGroupAndDeviceGroupRelationRequest extends Model
{
    /**
     * @example ni1iyxqry0j03plv
     *
     * @var string
     */
    public $controlId;

    /**
     * @example TestIsolationId
     *
     * @var string
     */
    public $isolationId;
    protected $_name = [
        'controlId'   => 'ControlId',
        'isolationId' => 'IsolationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlId) {
            $res['ControlId'] = $this->controlId;
        }
        if (null !== $this->isolationId) {
            $res['IsolationId'] = $this->isolationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryFaceUserGroupAndDeviceGroupRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlId'])) {
            $model->controlId = $map['ControlId'];
        }
        if (isset($map['IsolationId'])) {
            $model->isolationId = $map['IsolationId'];
        }

        return $model;
    }
}
