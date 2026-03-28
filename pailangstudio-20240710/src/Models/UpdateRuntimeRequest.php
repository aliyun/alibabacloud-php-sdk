<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;

class UpdateRuntimeRequest extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var bool
     */
    public $autoUpdateImage;

    /**
     * @var int
     */
    public $runTimeout;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'action' => 'Action',
        'autoUpdateImage' => 'AutoUpdateImage',
        'runTimeout' => 'RunTimeout',
        'version' => 'Version',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->autoUpdateImage) {
            $res['AutoUpdateImage'] = $this->autoUpdateImage;
        }

        if (null !== $this->runTimeout) {
            $res['RunTimeout'] = $this->runTimeout;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['AutoUpdateImage'])) {
            $model->autoUpdateImage = $map['AutoUpdateImage'];
        }

        if (isset($map['RunTimeout'])) {
            $model->runTimeout = $map['RunTimeout'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
