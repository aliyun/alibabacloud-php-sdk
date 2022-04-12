<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetJavaStartUpConfigResponseBody;

use AlibabaCloud\Tea\Model;

class javaStartUpConfig extends Model
{
    /**
     * @var string
     */
    public $originalConfigs;

    /**
     * @var string
     */
    public $startUpArgs;
    protected $_name = [
        'originalConfigs' => 'OriginalConfigs',
        'startUpArgs'     => 'StartUpArgs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalConfigs) {
            $res['OriginalConfigs'] = $this->originalConfigs;
        }
        if (null !== $this->startUpArgs) {
            $res['StartUpArgs'] = $this->startUpArgs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return javaStartUpConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginalConfigs'])) {
            $model->originalConfigs = $map['OriginalConfigs'];
        }
        if (isset($map['StartUpArgs'])) {
            $model->startUpArgs = $map['StartUpArgs'];
        }

        return $model;
    }
}
