<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServicesResponseBody\services;

use AlibabaCloud\Tea\Model;

class serviceInfos extends Model
{
    /**
     * @description The URL of the service icon.
     *
     * @example http://img.tidb.oss.url
     *
     * @var string
     */
    public $image;

    /**
     * @description The language of the service. Valid values:
     *
     *   zh-CN: Chinese.
     *   en-US: English.
     *
     * @example zh-CN
     *
     * @var string
     */
    public $locale;

    /**
     * @description The name of the service.
     *
     * @example SpringBoot-ECS容器版
     *
     * @var string
     */
    public $name;

    /**
     * @description The description of the service.
     *
     * @example B是A公司自主设计并研发的开源分布式的关系型数据库
     *
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
