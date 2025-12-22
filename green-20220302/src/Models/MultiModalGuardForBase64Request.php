<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models;

use AlibabaCloud\Dara\Model;

class MultiModalGuardForBase64Request extends Model
{
    /**
     * @var string
     */
    public $imageBase64Str;

    /**
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $serviceParameters;
    protected $_name = [
        'imageBase64Str' => 'ImageBase64Str',
        'service' => 'Service',
        'serviceParameters' => 'ServiceParameters',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageBase64Str) {
            $res['ImageBase64Str'] = $this->imageBase64Str;
        }

        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
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
        if (isset($map['ImageBase64Str'])) {
            $model->imageBase64Str = $map['ImageBase64Str'];
        }

        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }

        return $model;
    }
}
