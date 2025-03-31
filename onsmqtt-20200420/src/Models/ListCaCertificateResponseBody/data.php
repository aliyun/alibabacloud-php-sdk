<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListCaCertificateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListCaCertificateResponseBody\data\caCertificateVOS;

class data extends Model
{
    /**
     * @var caCertificateVOS[]
     */
    public $caCertificateVOS;

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
        'caCertificateVOS' => 'CaCertificateVOS',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->caCertificateVOS)) {
            Model::validateArray($this->caCertificateVOS);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caCertificateVOS) {
            if (\is_array($this->caCertificateVOS)) {
                $res['CaCertificateVOS'] = [];
                $n1 = 0;
                foreach ($this->caCertificateVOS as $item1) {
                    $res['CaCertificateVOS'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CaCertificateVOS'])) {
            if (!empty($map['CaCertificateVOS'])) {
                $model->caCertificateVOS = [];
                $n1 = 0;
                foreach ($map['CaCertificateVOS'] as $item1) {
                    $model->caCertificateVOS[$n1++] = caCertificateVOS::fromMap($item1);
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
