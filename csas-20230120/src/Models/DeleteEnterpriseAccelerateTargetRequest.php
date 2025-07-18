<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class DeleteEnterpriseAccelerateTargetRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example eap-ed1f0e392a28a4e6
     *
     * @var string
     */
    public $eapId;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $target;
    protected $_name = [
        'eapId' => 'EapId',
        'target' => 'Target',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->eapId) {
            $res['EapId'] = $this->eapId;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEnterpriseAccelerateTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EapId'])) {
            $model->eapId = $map['EapId'];
        }
        if (isset($map['Target'])) {
            if (!empty($map['Target'])) {
                $model->target = $map['Target'];
            }
        }

        return $model;
    }
}
