<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OnlineBizEntityRequest\onlineCommand;
use AlibabaCloud\Tea\Model;

class OnlineBizEntityRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var onlineCommand
     */
    public $onlineCommand;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'onlineCommand' => 'OnlineCommand',
        'opTenantId'    => 'OpTenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onlineCommand) {
            $res['OnlineCommand'] = null !== $this->onlineCommand ? $this->onlineCommand->toMap() : null;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnlineBizEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnlineCommand'])) {
            $model->onlineCommand = onlineCommand::fromMap($map['OnlineCommand']);
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
