<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class ApplyDataServiceAppShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $applyCommandShrink;

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
     * @example 102102
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'applyCommandShrink' => 'ApplyCommand',
        'opTenantId' => 'OpTenantId',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyCommandShrink) {
            $res['ApplyCommand'] = $this->applyCommandShrink;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyDataServiceAppShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyCommand'])) {
            $model->applyCommandShrink = $map['ApplyCommand'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
