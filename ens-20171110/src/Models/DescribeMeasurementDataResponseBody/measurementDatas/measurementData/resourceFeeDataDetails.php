<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponseBody\measurementDatas\measurementData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponseBody\measurementDatas\measurementData\resourceFeeDataDetails\resourceFeeDataDetail;

class resourceFeeDataDetails extends Model
{
    /**
     * @var resourceFeeDataDetail[]
     */
    public $resourceFeeDataDetail;
    protected $_name = [
        'resourceFeeDataDetail' => 'ResourceFeeDataDetail',
    ];

    public function validate()
    {
        if (\is_array($this->resourceFeeDataDetail)) {
            Model::validateArray($this->resourceFeeDataDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceFeeDataDetail) {
            if (\is_array($this->resourceFeeDataDetail)) {
                $res['ResourceFeeDataDetail'] = [];
                $n1 = 0;
                foreach ($this->resourceFeeDataDetail as $item1) {
                    $res['ResourceFeeDataDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ResourceFeeDataDetail'])) {
            if (!empty($map['ResourceFeeDataDetail'])) {
                $model->resourceFeeDataDetail = [];
                $n1 = 0;
                foreach ($map['ResourceFeeDataDetail'] as $item1) {
                    $model->resourceFeeDataDetail[$n1] = resourceFeeDataDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
