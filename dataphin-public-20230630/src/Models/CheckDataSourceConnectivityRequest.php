<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckDataSourceConnectivityRequest\checkCommand;
use AlibabaCloud\Tea\Model;

class CheckDataSourceConnectivityRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var checkCommand
     */
    public $checkCommand;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'checkCommand' => 'CheckCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkCommand) {
            $res['CheckCommand'] = null !== $this->checkCommand ? $this->checkCommand->toMap() : null;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckDataSourceConnectivityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckCommand'])) {
            $model->checkCommand = checkCommand::fromMap($map['CheckCommand']);
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
