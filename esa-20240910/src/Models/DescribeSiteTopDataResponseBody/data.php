<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteTopDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteTopDataResponseBody\data\detailData;

class data extends Model
{
    /**
     * @var detailData[]
     */
    public $detailData;

    /**
     * @var string
     */
    public $dimensionName;

    /**
     * @var string
     */
    public $fieldName;
    protected $_name = [
        'detailData' => 'DetailData',
        'dimensionName' => 'DimensionName',
        'fieldName' => 'FieldName',
    ];

    public function validate()
    {
        if (\is_array($this->detailData)) {
            Model::validateArray($this->detailData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detailData) {
            if (\is_array($this->detailData)) {
                $res['DetailData'] = [];
                $n1 = 0;
                foreach ($this->detailData as $item1) {
                    $res['DetailData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dimensionName) {
            $res['DimensionName'] = $this->dimensionName;
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
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
        if (isset($map['DetailData'])) {
            if (!empty($map['DetailData'])) {
                $model->detailData = [];
                $n1 = 0;
                foreach ($map['DetailData'] as $item1) {
                    $model->detailData[$n1++] = detailData::fromMap($item1);
                }
            }
        }

        if (isset($map['DimensionName'])) {
            $model->dimensionName = $map['DimensionName'];
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        return $model;
    }
}
