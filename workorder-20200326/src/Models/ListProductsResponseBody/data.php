<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200326\Models\ListProductsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Workorder\V20200326\Models\ListProductsResponseBody\data\consultationMore;
use AlibabaCloud\SDK\Workorder\V20200326\Models\ListProductsResponseBody\data\hotConsultation;
use AlibabaCloud\SDK\Workorder\V20200326\Models\ListProductsResponseBody\data\hotTech;
use AlibabaCloud\SDK\Workorder\V20200326\Models\ListProductsResponseBody\data\techMore;

class data extends Model
{
    /**
     * @var consultationMore[]
     */
    public $consultationMore;

    /**
     * @var hotConsultation[]
     */
    public $hotConsultation;

    /**
     * @var hotTech[]
     */
    public $hotTech;

    /**
     * @var techMore[]
     */
    public $techMore;
    protected $_name = [
        'consultationMore' => 'ConsultationMore',
        'hotConsultation' => 'HotConsultation',
        'hotTech' => 'HotTech',
        'techMore' => 'TechMore',
    ];

    public function validate()
    {
        if (\is_array($this->consultationMore)) {
            Model::validateArray($this->consultationMore);
        }
        if (\is_array($this->hotConsultation)) {
            Model::validateArray($this->hotConsultation);
        }
        if (\is_array($this->hotTech)) {
            Model::validateArray($this->hotTech);
        }
        if (\is_array($this->techMore)) {
            Model::validateArray($this->techMore);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consultationMore) {
            if (\is_array($this->consultationMore)) {
                $res['ConsultationMore'] = [];
                $n1 = 0;
                foreach ($this->consultationMore as $item1) {
                    $res['ConsultationMore'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hotConsultation) {
            if (\is_array($this->hotConsultation)) {
                $res['HotConsultation'] = [];
                $n1 = 0;
                foreach ($this->hotConsultation as $item1) {
                    $res['HotConsultation'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hotTech) {
            if (\is_array($this->hotTech)) {
                $res['HotTech'] = [];
                $n1 = 0;
                foreach ($this->hotTech as $item1) {
                    $res['HotTech'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->techMore) {
            if (\is_array($this->techMore)) {
                $res['TechMore'] = [];
                $n1 = 0;
                foreach ($this->techMore as $item1) {
                    $res['TechMore'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConsultationMore'])) {
            if (!empty($map['ConsultationMore'])) {
                $model->consultationMore = [];
                $n1 = 0;
                foreach ($map['ConsultationMore'] as $item1) {
                    $model->consultationMore[$n1] = consultationMore::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HotConsultation'])) {
            if (!empty($map['HotConsultation'])) {
                $model->hotConsultation = [];
                $n1 = 0;
                foreach ($map['HotConsultation'] as $item1) {
                    $model->hotConsultation[$n1] = hotConsultation::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HotTech'])) {
            if (!empty($map['HotTech'])) {
                $model->hotTech = [];
                $n1 = 0;
                foreach ($map['HotTech'] as $item1) {
                    $model->hotTech[$n1] = hotTech::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TechMore'])) {
            if (!empty($map['TechMore'])) {
                $model->techMore = [];
                $n1 = 0;
                foreach ($map['TechMore'] as $item1) {
                    $model->techMore[$n1] = techMore::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
