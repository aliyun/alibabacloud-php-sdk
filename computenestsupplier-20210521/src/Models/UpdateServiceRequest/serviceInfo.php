<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceRequest;

use AlibabaCloud\Tea\Model;

class serviceInfo extends Model
{
    /**
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $shortDescription;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'locale'           => 'Locale',
        'shortDescription' => 'ShortDescription',
        'image'            => 'Image',
        'name'             => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }
        if (null !== $this->shortDescription) {
            $res['ShortDescription'] = $this->shortDescription;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }
        if (isset($map['ShortDescription'])) {
            $model->shortDescription = $map['ShortDescription'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
