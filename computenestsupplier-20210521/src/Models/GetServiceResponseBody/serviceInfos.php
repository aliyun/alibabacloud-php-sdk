<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\serviceInfos\agreements;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\serviceInfos\softwares;
use AlibabaCloud\Tea\Model;

class serviceInfos extends Model
{
    /**
     * @description The agreement information about the service.
     *
     * @var agreements[]
     */
    public $agreements;

    /**
     * @description The URL of the service icon.
     *
     * @example https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png
     *
     * @var string
     */
    public $image;

    /**
     * @description The language of the service. Valid values:
     *
     *   zh-CN: Chinese
     *   en-US: English
     *
     * @example zh-CN
     *
     * @var string
     */
    public $locale;

    /**
     * @description The URL of the detailed description of the service.
     *
     * @example https://example.com
     *
     * @var string
     */
    public $longDescriptionUrl;

    /**
     * @description The service name.
     *
     * @example WordPress
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

    /**
     * @description The list of the information about the software in the service.
     *
     * @var softwares[]
     */
    public $softwares;
    protected $_name = [
        'agreements' => 'Agreements',
        'image' => 'Image',
        'locale' => 'Locale',
        'longDescriptionUrl' => 'LongDescriptionUrl',
        'name' => 'Name',
        'shortDescription' => 'ShortDescription',
        'softwares' => 'Softwares',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agreements) {
            $res['Agreements'] = [];
            if (null !== $this->agreements && \is_array($this->agreements)) {
                $n = 0;
                foreach ($this->agreements as $item) {
                    $res['Agreements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }
        if (null !== $this->longDescriptionUrl) {
            $res['LongDescriptionUrl'] = $this->longDescriptionUrl;
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
        if (isset($map['Agreements'])) {
            if (!empty($map['Agreements'])) {
                $model->agreements = [];
                $n = 0;
                foreach ($map['Agreements'] as $item) {
                    $model->agreements[$n++] = null !== $item ? agreements::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }
        if (isset($map['LongDescriptionUrl'])) {
            $model->longDescriptionUrl = $map['LongDescriptionUrl'];
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
