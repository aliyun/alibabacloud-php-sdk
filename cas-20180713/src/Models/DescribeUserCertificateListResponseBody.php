<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20180713\Models;

use AlibabaCloud\SDK\Cas\V20180713\Models\DescribeUserCertificateListResponseBody\certificateList;
use AlibabaCloud\Tea\Model;

class DescribeUserCertificateListResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var certificateList[]
     */
    public $certificateList;

    /**
     * @var int
     */
    public $showSize;
    protected $_name = [
        'totalCount'      => 'TotalCount',
        'requestId'       => 'RequestId',
        'currentPage'     => 'CurrentPage',
        'certificateList' => 'CertificateList',
        'showSize'        => 'ShowSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->certificateList) {
            $res['CertificateList'] = [];
            if (null !== $this->certificateList && \is_array($this->certificateList)) {
                $n = 0;
                foreach ($this->certificateList as $item) {
                    $res['CertificateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserCertificateListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['CertificateList'])) {
            if (!empty($map['CertificateList'])) {
                $model->certificateList = [];
                $n                      = 0;
                foreach ($map['CertificateList'] as $item) {
                    $model->certificateList[$n++] = null !== $item ? certificateList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }

        return $model;
    }
}
