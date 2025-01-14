<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class DeleteApprovalProcessesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $processIds;
    protected $_name = [
        'processIds' => 'ProcessIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->processIds) {
            $res['ProcessIds'] = $this->processIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteApprovalProcessesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProcessIds'])) {
            if (!empty($map['ProcessIds'])) {
                $model->processIds = $map['ProcessIds'];
            }
        }

        return $model;
    }
}
