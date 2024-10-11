<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteDataSourceRequest\deleteCommand;
use AlibabaCloud\Tea\Model;

class DeleteDataSourceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var deleteCommand
     */
    public $deleteCommand;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'deleteCommand' => 'DeleteCommand',
        'opTenantId'    => 'OpTenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteCommand) {
            $res['DeleteCommand'] = null !== $this->deleteCommand ? $this->deleteCommand->toMap() : null;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDataSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteCommand'])) {
            $model->deleteCommand = deleteCommand::fromMap($map['DeleteCommand']);
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
