<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListCaCertificateResponseBody;

use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListCaCertificateResponseBody\data\caCertificateVOS;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var caCertificateVOS[]
     */
    public $caCertificateVOS;

    /**
     * @example 2
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'caCertificateVOS' => 'CaCertificateVOS',
        'pageNo'           => 'PageNo',
        'pageSize'         => 'PageSize',
        'total'            => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caCertificateVOS) {
            $res['CaCertificateVOS'] = [];
            if (null !== $this->caCertificateVOS && \is_array($this->caCertificateVOS)) {
                $n = 0;
                foreach ($this->caCertificateVOS as $item) {
                    $res['CaCertificateVOS'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['CaCertificateVOS'])) {
            if (!empty($map['CaCertificateVOS'])) {
                $model->caCertificateVOS = [];
                $n                       = 0;
                foreach ($map['CaCertificateVOS'] as $item) {
                    $model->caCertificateVOS[$n++] = null !== $item ? caCertificateVOS::fromMap($item) : $item;
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
