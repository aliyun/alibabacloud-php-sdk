<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class PublishObjectListShrinkRequest extends Model
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
    public $publishCommandShrink;
    protected $_name = [
        'opTenantId'           => 'OpTenantId',
        'publishCommandShrink' => 'PublishCommand',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->publishCommandShrink) {
            $res['PublishCommand'] = $this->publishCommandShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishObjectListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['PublishCommand'])) {
            $model->publishCommandShrink = $map['PublishCommand'];
        }

        return $model;
    }
}
