<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class ArmsConfig extends Model
{
    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $licenseKey;
    protected $_name = [
        'agentVersion' => 'agentVersion',
        'appId'        => 'appId',
        'licenseKey'   => 'licenseKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentVersion) {
            $res['agentVersion'] = $this->agentVersion;
        }
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }
        if (null !== $this->licenseKey) {
            $res['licenseKey'] = $this->licenseKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ArmsConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agentVersion'])) {
            $model->agentVersion = $map['agentVersion'];
        }
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }
        if (isset($map['licenseKey'])) {
            $model->licenseKey = $map['licenseKey'];
        }

        return $model;
    }
}
