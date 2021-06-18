<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetLocalInstallScriptRequest extends Model
{
    /**
     * @var string
     */
    public $platformType;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var bool
     */
    public $internalNetwork;
    protected $_name = [
        'platformType'    => 'PlatformType',
        'uuid'            => 'Uuid',
        'internalNetwork' => 'InternalNetwork',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->internalNetwork) {
            $res['InternalNetwork'] = $this->internalNetwork;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLocalInstallScriptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['InternalNetwork'])) {
            $model->internalNetwork = $map['InternalNetwork'];
        }

        return $model;
    }
}
