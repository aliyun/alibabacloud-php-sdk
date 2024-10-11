<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDataSourceBasicInfoRequest\updateCommand;
use AlibabaCloud\Tea\Model;

class UpdateDataSourceBasicInfoRequest extends Model
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
     * @var updateCommand
     */
    public $updateCommand;
    protected $_name = [
        'opTenantId'    => 'OpTenantId',
        'updateCommand' => 'UpdateCommand',
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
        if (null !== $this->updateCommand) {
            $res['UpdateCommand'] = null !== $this->updateCommand ? $this->updateCommand->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDataSourceBasicInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['UpdateCommand'])) {
            $model->updateCommand = updateCommand::fromMap($map['UpdateCommand']);
        }

        return $model;
    }
}
