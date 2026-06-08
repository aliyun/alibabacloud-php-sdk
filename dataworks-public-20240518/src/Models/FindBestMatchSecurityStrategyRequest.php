<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class FindBestMatchSecurityStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $controlModule;

    /**
     * @var string
     */
    public $controlSubModule;

    /**
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'controlModule' => 'ControlModule',
        'controlSubModule' => 'ControlSubModule',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->controlModule) {
            $res['ControlModule'] = $this->controlModule;
        }

        if (null !== $this->controlSubModule) {
            $res['ControlSubModule'] = $this->controlSubModule;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlModule'])) {
            $model->controlModule = $map['ControlModule'];
        }

        if (isset($map['ControlSubModule'])) {
            $model->controlSubModule = $map['ControlSubModule'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
