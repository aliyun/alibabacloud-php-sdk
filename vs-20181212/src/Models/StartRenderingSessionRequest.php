<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\StartRenderingSessionRequest\clientParams;
use AlibabaCloud\Tea\Model;

class StartRenderingSessionRequest extends Model
{
    /**
     * @example cap-b06b26edfhytbn b94a75ae1a79efc90eb
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example 04c30850-1d91-4da1-b811-66d0ee94af7d
     *
     * @var string
     */
    public $clientId;

    /**
     * @var clientParams
     */
    public $clientParams;

    /**
     * @description This parameter is required.
     *
     * @example project-422bc38dfgh5eb44149f135ef76304f63b
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'appId' => 'AppId',
        'clientId' => 'ClientId',
        'clientParams' => 'ClientParams',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientParams) {
            $res['ClientParams'] = null !== $this->clientParams ? $this->clientParams->toMap() : null;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartRenderingSessionRequest
     */
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
