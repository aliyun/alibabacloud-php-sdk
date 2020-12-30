<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200326\Models\ListProductsResponseBody;

use AlibabaCloud\SDK\Workorder\V20200326\Models\ListProductsResponseBody\data\consultationMore;
use AlibabaCloud\SDK\Workorder\V20200326\Models\ListProductsResponseBody\data\hotConsultation;
use AlibabaCloud\SDK\Workorder\V20200326\Models\ListProductsResponseBody\data\hotTech;
use AlibabaCloud\SDK\Workorder\V20200326\Models\ListProductsResponseBody\data\techMore;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var hotConsultation[]
     */
    public $hotConsultation;

    /**
     * @var consultationMore[]
     */
    public $consultationMore;

    /**
     * @var hotTech[]
     */
    public $hotTech;

    /**
     * @var techMore[]
     */
    public $techMore;
    protected $_name = [
        'hotConsultation'  => 'HotConsultation',
        'consultationMore' => 'ConsultationMore',
        'hotTech'          => 'HotTech',
        'techMore'         => 'TechMore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotConsultation) {
            $res['HotConsultation'] = [];
            if (null !== $this->hotConsultation && \is_array($this->hotConsultation)) {
                $n = 0;
                foreach ($this->hotConsultation as $item) {
                    $res['HotConsultation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->consultationMore) {
            $res['ConsultationMore'] = [];
            if (null !== $this->consultationMore && \is_array($this->consultationMore)) {
                $n = 0;
                foreach ($this->consultationMore as $item) {
                    $res['ConsultationMore'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hotTech) {
            $res['HotTech'] = [];
            if (null !== $this->hotTech && \is_array($this->hotTech)) {
                $n = 0;
                foreach ($this->hotTech as $item) {
                    $res['HotTech'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->techMore) {
            $res['TechMore'] = [];
            if (null !== $this->techMore && \is_array($this->techMore)) {
                $n = 0;
                foreach ($this->techMore as $item) {
                    $res['TechMore'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HotConsultation'])) {
            if (!empty($map['HotConsultation'])) {
                $model->hotConsultation = [];
                $n                      = 0;
                foreach ($map['HotConsultation'] as $item) {
                    $model->hotConsultation[$n++] = null !== $item ? hotConsultation::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConsultationMore'])) {
            if (!empty($map['ConsultationMore'])) {
                $model->consultationMore = [];
                $n                       = 0;
                foreach ($map['ConsultationMore'] as $item) {
                    $model->consultationMore[$n++] = null !== $item ? consultationMore::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HotTech'])) {
            if (!empty($map['HotTech'])) {
                $model->hotTech = [];
                $n              = 0;
                foreach ($map['HotTech'] as $item) {
                    $model->hotTech[$n++] = null !== $item ? hotTech::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TechMore'])) {
            if (!empty($map['TechMore'])) {
                $model->techMore = [];
                $n               = 0;
                foreach ($map['TechMore'] as $item) {
                    $model->techMore[$n++] = null !== $item ? techMore::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
