<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\serviceInfos\agreements;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceResponseBody\serviceInfos\softwares;

class serviceInfos extends Model
{
    /**
     * @var agreements[]
     */
    public $agreements;

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
    public $longDescriptionUrl;

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
        'agreements' => 'Agreements',
        'image' => 'Image',
        'locale' => 'Locale',
        'longDescriptionUrl' => 'LongDescriptionUrl',
        'name' => 'Name',
        'shortDescription' => 'ShortDescription',
        'softwares' => 'Softwares',
    ];

    public function validate()
    {
        if (\is_array($this->agreements)) {
            Model::validateArray($this->agreements);
        }
        if (\is_array($this->softwares)) {
            Model::validateArray($this->softwares);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agreements) {
            if (\is_array($this->agreements)) {
                $res['Agreements'] = [];
                $n1 = 0;
                foreach ($this->agreements as $item1) {
                    $res['Agreements'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->softwares)) {
                $res['Softwares'] = [];
                $n1 = 0;
                foreach ($this->softwares as $item1) {
                    $res['Softwares'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Agreements'])) {
            if (!empty($map['Agreements'])) {
                $model->agreements = [];
                $n1 = 0;
                foreach ($map['Agreements'] as $item1) {
                    $model->agreements[$n1++] = agreements::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Softwares'] as $item1) {
                    $model->softwares[$n1++] = softwares::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
