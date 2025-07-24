<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesResponseBody\services;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesResponseBody\services\serviceInfos\softwares;
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
     * @example Docker Community Edition
     *
     * @var string
     */
    public $name;

    /**
     * @description The description of the service.
     *
     * @example Docker Community Edition (CE) is a free version of the Docker project, aimed at developers, enthusiasts, and individuals and organizations who want to use container technology.
     *
     * @var string
     */
    public $shortDescription;

    /**
     * @description Service software information.
     *
     * @var softwares[]
     */
    public $softwares;
    protected $_name = [
        'image' => 'Image',
        'locale' => 'Locale',
        'name' => 'Name',
        'shortDescription' => 'ShortDescription',
        'softwares' => 'Softwares',
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
        if (null !== $this->softwares) {
            $res['Softwares'] = [];
            if (null !== $this->softwares && \is_array($this->softwares)) {
                $n = 0;
                foreach ($this->softwares as $item) {
                    $res['Softwares'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Softwares'])) {
            if (!empty($map['Softwares'])) {
                $model->softwares = [];
                $n = 0;
                foreach ($map['Softwares'] as $item) {
                    $model->softwares[$n++] = null !== $item ? softwares::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
