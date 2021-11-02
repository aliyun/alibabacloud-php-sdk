<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetLocalInstallScriptRequest extends Model
{
    /**
     * @var bool
     */
    public $internalNetwork;

    /**
     * @var string
     */
    public $platformType;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'internalNetwork' => 'InternalNetwork',
        'platformType'    => 'PlatformType',
        'uuid'            => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internalNetwork) {
            $res['InternalNetwork'] = $this->internalNetwork;
        }
        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['InternalNetwork'])) {
            $model->internalNetwork = $map['InternalNetwork'];
        }
        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
