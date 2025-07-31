<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class SubmitBatchTaskShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $submitCommandShrink;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'submitCommandShrink' => 'SubmitCommand',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->submitCommandShrink) {
            $res['SubmitCommand'] = $this->submitCommandShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitBatchTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['SubmitCommand'])) {
            $model->submitCommandShrink = $map['SubmitCommand'];
        }

        return $model;
    }
}
