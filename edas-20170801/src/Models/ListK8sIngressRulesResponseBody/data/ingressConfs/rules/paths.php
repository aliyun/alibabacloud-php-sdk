<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\data\ingressConfs\rules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\data\ingressConfs\rules\paths\backend;

class paths extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var backend
     */
    public $backend;

    /**
     * @var int
     */
    public $collectRate;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $pathType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'backend' => 'Backend',
        'collectRate' => 'CollectRate',
        'path' => 'Path',
        'pathType' => 'PathType',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->backend) {
            $this->backend->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->backend) {
            $res['Backend'] = null !== $this->backend ? $this->backend->toArray($noStream) : $this->backend;
        }

        if (null !== $this->collectRate) {
            $res['CollectRate'] = $this->collectRate;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->pathType) {
            $res['PathType'] = $this->pathType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Backend'])) {
            $model->backend = backend::fromMap($map['Backend']);
        }

        if (isset($map['CollectRate'])) {
            $model->collectRate = $map['CollectRate'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['PathType'])) {
            $model->pathType = $map['PathType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
