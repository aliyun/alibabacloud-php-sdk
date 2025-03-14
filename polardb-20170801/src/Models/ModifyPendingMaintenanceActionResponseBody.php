<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyPendingMaintenanceActionResponseBody extends Model
{
    /**
     * @description The ID of the task.
     *
     * @example 111111
     *
     * @var string
     */
    public $ids;

    /**
     * @description The ID of the request.
     *
     * @example 93061E17-B56A-4324-BC95-D0FFD2******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ids' => 'Ids',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPendingMaintenanceActionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
