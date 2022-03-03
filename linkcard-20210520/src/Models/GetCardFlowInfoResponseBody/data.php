<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardFlowInfoResponseBody;

use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardFlowInfoResponseBody\data\listCardMonthFlow;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardFlowInfoResponseBody\data\listPackageDTO;
use AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardFlowInfoResponseBody\data\listVendorDetail;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var listCardMonthFlow[]
     */
    public $listCardMonthFlow;

    /**
     * @var listPackageDTO[]
     */
    public $listPackageDTO;

    /**
     * @var listVendorDetail[]
     */
    public $listVendorDetail;
    protected $_name = [
        'listCardMonthFlow' => 'ListCardMonthFlow',
        'listPackageDTO'    => 'ListPackageDTO',
        'listVendorDetail'  => 'ListVendorDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listCardMonthFlow) {
            $res['ListCardMonthFlow'] = [];
            if (null !== $this->listCardMonthFlow && \is_array($this->listCardMonthFlow)) {
                $n = 0;
                foreach ($this->listCardMonthFlow as $item) {
                    $res['ListCardMonthFlow'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->listPackageDTO) {
            $res['ListPackageDTO'] = [];
            if (null !== $this->listPackageDTO && \is_array($this->listPackageDTO)) {
                $n = 0;
                foreach ($this->listPackageDTO as $item) {
                    $res['ListPackageDTO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->listVendorDetail) {
            $res['ListVendorDetail'] = [];
            if (null !== $this->listVendorDetail && \is_array($this->listVendorDetail)) {
                $n = 0;
                foreach ($this->listVendorDetail as $item) {
                    $res['ListVendorDetail'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ListCardMonthFlow'])) {
            if (!empty($map['ListCardMonthFlow'])) {
                $model->listCardMonthFlow = [];
                $n                        = 0;
                foreach ($map['ListCardMonthFlow'] as $item) {
                    $model->listCardMonthFlow[$n++] = null !== $item ? listCardMonthFlow::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ListPackageDTO'])) {
            if (!empty($map['ListPackageDTO'])) {
                $model->listPackageDTO = [];
                $n                     = 0;
                foreach ($map['ListPackageDTO'] as $item) {
                    $model->listPackageDTO[$n++] = null !== $item ? listPackageDTO::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ListVendorDetail'])) {
            if (!empty($map['ListVendorDetail'])) {
                $model->listVendorDetail = [];
                $n                       = 0;
                foreach ($map['ListVendorDetail'] as $item) {
                    $model->listVendorDetail[$n++] = null !== $item ? listVendorDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
