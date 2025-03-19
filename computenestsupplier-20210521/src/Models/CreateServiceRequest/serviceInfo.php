<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceRequest;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceRequest\serviceInfo\agreements;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceRequest\serviceInfo\softwares;
use AlibabaCloud\Tea\Model;

class serviceInfo extends Model
{
    /**
     * @description Protocol document information about the service.
     *
     * @var agreements[]
     */
    public $agreements;

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
     *   zh-CN: Chinese
     *   en-US: English
     *
     * This parameter is required.
     *
     * @example zh-CN
     *
     * @var string
     */
    public $locale;

    /**
     * @description The URL of the detailed description of the service.
     *
     * @example http://description.tidb.oss.url
     *
     * @var string
     */
    public $longDescriptionUrl;

    /**
     * @description The service name.
     *
     * This parameter is required.
     *
     * @example TiDB Database
     *
     * @var string
     */
    public $name;

    /**
     * @description The description of the service.
     *
     * @example TiDB是A公司自主设计、研发的开源分布式关系型数据库。
     *
     * @var string
     */
    public $shortDescription;

    /**
     * @description The list of the software in the service.
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
     * @return serviceInfo
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
