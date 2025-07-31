<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddTenantMembersRequest\addCommand;
use AlibabaCloud\Tea\Model;

class AddTenantMembersRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var addCommand
     */
    public $addCommand;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'addCommand' => 'AddCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addCommand) {
            $res['AddCommand'] = null !== $this->addCommand ? $this->addCommand->toMap() : null;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTenantMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddCommand'])) {
            $model->addCommand = addCommand::fromMap($map['AddCommand']);
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
