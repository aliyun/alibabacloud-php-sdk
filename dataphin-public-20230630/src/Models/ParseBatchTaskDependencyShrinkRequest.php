<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class ParseBatchTaskDependencyShrinkRequest extends Model
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
    public $parseCommandShrink;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'parseCommandShrink' => 'ParseCommand',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->parseCommandShrink) {
            $res['ParseCommand'] = $this->parseCommandShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ParseBatchTaskDependencyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['ParseCommand'])) {
            $model->parseCommandShrink = $map['ParseCommand'];
        }

        return $model;
    }
}
