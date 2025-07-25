<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesResponseBody\serviceInstances\service;

use AlibabaCloud\Tea\Model;

class serviceInfos extends Model
{
    /**
     * @description The URL of the service icon.
     *
     * @example https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png
     *
     * @var string
     */
    public $image;

    /**
     * @description The language of the service instance.
     *
     * @example zh-CN
     *
     * @var string
     */
    public $locale;

    /**
     * @description The name of the service.
     *
     * @example wordpress
     *
     * @var string
     */
    public $name;

    /**
     * @description The description of the service.
     *
     * @example WordPress is a free and open-source website content management system (CMS).
     *
     * @var string
     */
    public $shortDescription;
    protected $_name = [
        'image' => 'Image',
        'locale' => 'Locale',
        'name' => 'Name',
        'shortDescription' => 'ShortDescription',
    ];

    public function validate() {}

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
