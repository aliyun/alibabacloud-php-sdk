<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCertificateByCaSnResponseBody;

use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCertificateByCaSnResponseBody\data\deviceCertificateVOS;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Details of the device certificate.
     *
     * @var deviceCertificateVOS[]
     */
    public $deviceCertificateVOS;

    /**
     * @description The current page number of the returned query records.
     *
     * @example 2
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The maximum number of results to display per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Total number of query results.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'deviceCertificateVOS' => 'DeviceCertificateVOS',
        'pageNo'               => 'PageNo',
        'pageSize'             => 'PageSize',
        'total'                => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceCertificateVOS) {
            $res['DeviceCertificateVOS'] = [];
            if (null !== $this->deviceCertificateVOS && \is_array($this->deviceCertificateVOS)) {
                $n = 0;
                foreach ($this->deviceCertificateVOS as $item) {
                    $res['DeviceCertificateVOS'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['DeviceCertificateVOS'])) {
            if (!empty($map['DeviceCertificateVOS'])) {
                $model->deviceCertificateVOS = [];
                $n                           = 0;
                foreach ($map['DeviceCertificateVOS'] as $item) {
                    $model->deviceCertificateVOS[$n++] = null !== $item ? deviceCertificateVOS::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
