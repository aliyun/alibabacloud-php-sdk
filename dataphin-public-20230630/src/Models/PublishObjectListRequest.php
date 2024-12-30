<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\PublishObjectListRequest\publishCommand;
use AlibabaCloud\Tea\Model;

class PublishObjectListRequest extends Model
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
     * @var publishCommand
     */
    public $publishCommand;
    protected $_name = [
        'opTenantId'     => 'OpTenantId',
        'publishCommand' => 'PublishCommand',
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
        if (null !== $this->publishCommand) {
            $res['PublishCommand'] = null !== $this->publishCommand ? $this->publishCommand->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishObjectListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['PublishCommand'])) {
            $model->publishCommand = publishCommand::fromMap($map['PublishCommand']);
        }

        return $model;
    }
}
