<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetWafQuotaResponseBody\quota;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\QuotaPageContentTypesValue;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafQuotaInteger;

class page extends Model
{
    /**
     * @var QuotaPageContentTypesValue[]
     */
    public $contentTypes;
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var WafQuotaInteger
     */
    public $numberTotal;
    protected $_name = [
        'contentTypes' => 'ContentTypes',
        'enable'       => 'Enable',
        'numberTotal'  => 'NumberTotal',
    ];

    public function validate()
    {
        if (\is_array($this->contentTypes)) {
            Model::validateArray($this->contentTypes);
        }
        if (null !== $this->numberTotal) {
            $this->numberTotal->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentTypes) {
            if (\is_array($this->contentTypes)) {
                $res['ContentTypes'] = [];
                foreach ($this->contentTypes as $key1 => $value1) {
                    $res['ContentTypes'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->numberTotal) {
            $res['NumberTotal'] = null !== $this->numberTotal ? $this->numberTotal->toArray($noStream) : $this->numberTotal;
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
        if (isset($map['ContentTypes'])) {
            if (!empty($map['ContentTypes'])) {
                $model->contentTypes = [];
                foreach ($map['ContentTypes'] as $key1 => $value1) {
                    $model->contentTypes[$key1] = QuotaPageContentTypesValue::fromMap($value1);
                }
            }
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['NumberTotal'])) {
            $model->numberTotal = WafQuotaInteger::fromMap($map['NumberTotal']);
        }

        return $model;
    }
}
