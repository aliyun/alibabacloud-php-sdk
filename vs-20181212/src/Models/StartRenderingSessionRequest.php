<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartRenderingSessionRequest\clientParams;

class StartRenderingSessionRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var clientParams
     */
    public $clientParams;

    /**
     * @var string
     */
    public $patchId;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'appId' => 'AppId',
        'clientId' => 'ClientId',
        'clientParams' => 'ClientParams',
        'patchId' => 'PatchId',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        if (null !== $this->clientParams) {
            $this->clientParams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->clientParams) {
            $res['ClientParams'] = null !== $this->clientParams ? $this->clientParams->toArray($noStream) : $this->clientParams;
        }

        if (null !== $this->patchId) {
            $res['PatchId'] = $this->patchId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['ClientParams'])) {
            $model->clientParams = clientParams::fromMap($map['ClientParams']);
        }

        if (isset($map['PatchId'])) {
            $model->patchId = $map['PatchId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
