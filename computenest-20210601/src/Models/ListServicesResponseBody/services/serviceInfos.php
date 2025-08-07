<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesResponseBody\services;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesResponseBody\services\serviceInfos\softwares;

class serviceInfos extends Model
{
    /**
     * @var string
     */
    public $image;

    /**
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

    /**
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

    public function validate()
    {
        if (\is_array($this->softwares)) {
            Model::validateArray($this->softwares);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->softwares)) {
                $res['Softwares'] = [];
                $n1 = 0;
                foreach ($this->softwares as $item1) {
                    $res['Softwares'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['Softwares'] as $item1) {
                    $model->softwares[$n1] = softwares::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
