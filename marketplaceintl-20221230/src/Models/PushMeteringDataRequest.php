<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\PushMeteringDataRequest\meteringData;

class PushMeteringDataRequest extends Model
{
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var meteringData[]
     */
    public $meteringData;
    protected $_name = [
        'gmtCreate'    => 'GmtCreate',
        'meteringData' => 'MeteringData',
    ];

    public function validate()
    {
        if (\is_array($this->meteringData)) {
            Model::validateArray($this->meteringData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->meteringData) {
            if (\is_array($this->meteringData)) {
                $res['MeteringData'] = [];
                $n1                  = 0;
                foreach ($this->meteringData as $item1) {
                    $res['MeteringData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['MeteringData'])) {
            if (!empty($map['MeteringData'])) {
                $model->meteringData = [];
                $n1                  = 0;
                foreach ($map['MeteringData'] as $item1) {
                    $model->meteringData[$n1++] = meteringData::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
