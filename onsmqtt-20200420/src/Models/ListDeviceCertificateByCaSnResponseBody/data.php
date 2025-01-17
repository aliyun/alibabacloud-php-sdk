<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCertificateByCaSnResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListDeviceCertificateByCaSnResponseBody\data\deviceCertificateVOS;

class data extends Model
{
    /**
     * @var deviceCertificateVOS[]
     */
    public $deviceCertificateVOS;
    /**
     * @var int
     */
    public $pageNo;
    /**
     * @var int
     */
    public $pageSize;
    /**
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
        if (\is_array($this->deviceCertificateVOS)) {
            Model::validateArray($this->deviceCertificateVOS);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceCertificateVOS) {
            if (\is_array($this->deviceCertificateVOS)) {
                $res['DeviceCertificateVOS'] = [];
                $n1                          = 0;
                foreach ($this->deviceCertificateVOS as $item1) {
                    $res['DeviceCertificateVOS'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceCertificateVOS'])) {
            if (!empty($map['DeviceCertificateVOS'])) {
                $model->deviceCertificateVOS = [];
                $n1                          = 0;
                foreach ($map['DeviceCertificateVOS'] as $item1) {
                    $model->deviceCertificateVOS[$n1++] = deviceCertificateVOS::fromMap($item1);
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
