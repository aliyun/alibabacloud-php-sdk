<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ApplyDataServiceAppRequest\applyCommand;
use AlibabaCloud\Tea\Model;

class ApplyDataServiceAppRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var applyCommand
     */
    public $applyCommand;

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
     * @example 102102
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'applyCommand' => 'ApplyCommand',
        'opTenantId' => 'OpTenantId',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyCommand) {
            $res['ApplyCommand'] = null !== $this->applyCommand ? $this->applyCommand->toMap() : null;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyDataServiceAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyCommand'])) {
            $model->applyCommand = applyCommand::fromMap($map['ApplyCommand']);
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
