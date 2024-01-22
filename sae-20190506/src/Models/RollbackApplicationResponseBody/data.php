<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\RollbackApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the change process.
     *
     * @example 01db03d3-3ee9-48b3-b3d0-dfce2d88****
     *
     * @var string
     */
    public $changeOrderId;

    /**
     * @description Specifies whether approval is required when a RAM user performs release. Take note of the following rules:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isNeedApproval;
    protected $_name = [
        'changeOrderId'  => 'ChangeOrderId',
        'isNeedApproval' => 'IsNeedApproval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeOrderId) {
            $res['ChangeOrderId'] = $this->changeOrderId;
        }
        if (null !== $this->isNeedApproval) {
            $res['IsNeedApproval'] = $this->isNeedApproval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeOrderId'])) {
            $model->changeOrderId = $map['ChangeOrderId'];
        }
        if (isset($map['IsNeedApproval'])) {
            $model->isNeedApproval = $map['IsNeedApproval'];
        }

        return $model;
    }
}
