<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\SDK\Cas\V20200407\Models\ListCertResponseBody\certList;
use AlibabaCloud\Tea\Model;

class ListCertResponseBody extends Model
{
    /**
     * @var certList[]
     */
    public $certList;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $showSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'certList'    => 'CertList',
        'currentPage' => 'CurrentPage',
        'requestId'   => 'RequestId',
        'showSize'    => 'ShowSize',
        'totalCount'  => 'TotalCount',
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCertResponseBody
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
