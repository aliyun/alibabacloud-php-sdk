<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSMCertificateListResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnSMCertificateListResponseBody\certificateListModel\certList;
use AlibabaCloud\Tea\Model;

class certificateListModel extends Model
{
    /**
     * @var certList[]
     */
    public $certList;

    /**
     * @example 2
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'certList' => 'CertList',
        'count'    => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certList) {
            $res['CertList'] = [];
            if (null !== $this->certList && \is_array($this->certList)) {
                $n = 0;
                foreach ($this->certList as $item) {
                    $res['CertList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificateListModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertList'])) {
            if (!empty($map['CertList'])) {
                $model->certList = [];
                $n               = 0;
                foreach ($map['CertList'] as $item) {
                    $model->certList[$n++] = null !== $item ? certList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
