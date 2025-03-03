<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class ListImagesRequest extends Model
{
    /**
     * @var string
     */
    public $architecture;
    /**
     * @var string
     */
    public $imageVersion;
    /**
     * @var string
     */
    public $platform;
    protected $_name = [
        'architecture' => 'Architecture',
        'imageVersion' => 'ImageVersion',
        'platform'     => 'Platform',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
