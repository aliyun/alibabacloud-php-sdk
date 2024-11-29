<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesResponseBody\services;

use AlibabaCloud\Tea\Model;

class serviceInfos extends Model
{
    /**
     * @example http://img.tidb.oss.url
     *
     * @var string
     */
    public $image;

    /**
     * @example zh-CN
     *
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $shortDescription;
    protected $_name = [
        'image'            => 'Image',
        'locale'           => 'Locale',
        'name'             => 'Name',
        'shortDescription' => 'ShortDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->shortDescription) {
            $res['ShortDescription'] = $this->shortDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ShortDescription'])) {
            $model->shortDescription = $map['ShortDescription'];
        }

        return $model;
    }
}
