<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class ListImagesRequest extends Model
{
    /**
     * @description Architecture
     *
     * @example x86_64
     *
     * @var string
     */
    public $architecture;

    /**
     * @description Image version
     *
     * @example 7.9
     *
     * @var string
     */
    public $imageVersion;

    /**
     * @description Platform
     *
     * @example ALinux3
     *
     * @var string
     */
    public $platform;
    protected $_name = [
        'architecture' => 'Architecture',
        'imageVersion' => 'ImageVersion',
        'platform' => 'Platform',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        return $model;
    }
}
