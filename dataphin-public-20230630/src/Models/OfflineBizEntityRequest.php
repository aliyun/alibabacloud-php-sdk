<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OfflineBizEntityRequest\offlineCommand;
use AlibabaCloud\Tea\Model;

class OfflineBizEntityRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var offlineCommand
     */
    public $offlineCommand;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'offlineCommand' => 'OfflineCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->offlineCommand) {
            $res['OfflineCommand'] = null !== $this->offlineCommand ? $this->offlineCommand->toMap() : null;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OfflineBizEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OfflineCommand'])) {
            $model->offlineCommand = offlineCommand::fromMap($map['OfflineCommand']);
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
