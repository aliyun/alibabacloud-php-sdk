<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsCertificateListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsCertificateListResponseBody\certificateListModel\certList;

class certificateListModel extends Model
{
    /**
     * @var certList[]
     */
    public $certList;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'certList' => 'CertList',
        'count' => 'Count',
    ];

    public function validate()
    {
        if (\is_array($this->certList)) {
            Model::validateArray($this->certList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certList) {
            if (\is_array($this->certList)) {
                $res['CertList'] = [];
                $n1 = 0;
                foreach ($this->certList as $item1) {
                    $res['CertList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (isset($map['CertList'])) {
            if (!empty($map['CertList'])) {
                $model->certList = [];
                $n1 = 0;
                foreach ($map['CertList'] as $item1) {
                    $model->certList[$n1++] = certList::fromMap($item1);
                }
            }
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
