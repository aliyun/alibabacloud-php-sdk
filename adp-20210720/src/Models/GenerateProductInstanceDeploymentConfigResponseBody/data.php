<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GenerateProductInstanceDeploymentConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example clusterId: 21349919-530c-41bb-a0a9-xxx
     * -----END PUBLIC KEY-----
     * @var string
     */
    public $packageConfig;
    protected $_name = [
        'packageConfig' => 'packageConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packageConfig) {
            $res['packageConfig'] = $this->packageConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['packageConfig'])) {
            $model->packageConfig = $map['packageConfig'];
        }

        return $model;
    }
}
