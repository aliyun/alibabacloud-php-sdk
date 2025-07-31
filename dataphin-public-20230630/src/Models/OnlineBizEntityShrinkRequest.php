<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class OnlineBizEntityShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $onlineCommandShrink;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'onlineCommandShrink' => 'OnlineCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->onlineCommandShrink) {
            $res['OnlineCommand'] = $this->onlineCommandShrink;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnlineBizEntityShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnlineCommand'])) {
            $model->onlineCommandShrink = $map['OnlineCommand'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
