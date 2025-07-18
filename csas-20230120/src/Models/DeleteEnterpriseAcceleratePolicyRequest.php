<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class DeleteEnterpriseAcceleratePolicyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example eap-6edfb9d722ef8429
     *
     * @var string
     */
    public $eapId;
    protected $_name = [
        'eapId' => 'EapId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->eapId) {
            $res['EapId'] = $this->eapId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEnterpriseAcceleratePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EapId'])) {
            $model->eapId = $map['EapId'];
        }

        return $model;
    }
}
