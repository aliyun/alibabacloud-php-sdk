<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodCertificateListResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodCertificateListResponseBody\certificateListModel\certList;
use AlibabaCloud\Tea\Model;

class certificateListModel extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var certList
     */
    public $certList;
    protected $_name = [
        'count'    => 'Count',
        'certList' => 'CertList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->certList) {
            $res['CertList'] = null !== $this->certList ? $this->certList->toMap() : null;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CertList'])) {
            $model->certList = certList::fromMap($map['CertList']);
        }

        return $model;
    }
}
