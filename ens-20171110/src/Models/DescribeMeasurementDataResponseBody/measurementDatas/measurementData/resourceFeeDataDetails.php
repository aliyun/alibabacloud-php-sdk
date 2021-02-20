<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponseBody\measurementDatas\measurementData;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponseBody\measurementDatas\measurementData\resourceFeeDataDetails\resourceFeeDataDetail;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceFeeDataDetail) {
            $res['ResourceFeeDataDetail'] = [];
            if (null !== $this->resourceFeeDataDetail && \is_array($this->resourceFeeDataDetail)) {
                $n = 0;
                foreach ($this->resourceFeeDataDetail as $item) {
                    $res['ResourceFeeDataDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceFeeDataDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceFeeDataDetail'])) {
            if (!empty($map['ResourceFeeDataDetail'])) {
                $model->resourceFeeDataDetail = [];
                $n                            = 0;
                foreach ($map['ResourceFeeDataDetail'] as $item) {
                    $model->resourceFeeDataDetail[$n++] = null !== $item ? resourceFeeDataDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
