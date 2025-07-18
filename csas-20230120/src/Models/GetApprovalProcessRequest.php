<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class GetApprovalProcessRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example approval-process-fcc351b8a95b****
     *
     * @var string
     */
    public $processId;
    protected $_name = [
        'processId' => 'ProcessId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApprovalProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }

        return $model;
    }
}
