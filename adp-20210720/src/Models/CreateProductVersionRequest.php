<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class CreateProductVersionRequest extends Model
{
    /**
     * @var string
     */
    public $baseProductVersionUID;

    /**
     * @var string
     */
    public $version;

    /**
     * @var bool
     */
    public $withoutBaseProductVersion;
    protected $_name = [
        'baseProductVersionUID'     => 'baseProductVersionUID',
        'version'                   => 'version',
        'withoutBaseProductVersion' => 'withoutBaseProductVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseProductVersionUID) {
            $res['baseProductVersionUID'] = $this->baseProductVersionUID;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->withoutBaseProductVersion) {
            $res['withoutBaseProductVersion'] = $this->withoutBaseProductVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProductVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['baseProductVersionUID'])) {
            $model->baseProductVersionUID = $map['baseProductVersionUID'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['withoutBaseProductVersion'])) {
            $model->withoutBaseProductVersion = $map['withoutBaseProductVersion'];
        }

        return $model;
    }
}
