<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCertResponseBody\certList;

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
                $n1              = 0;
                foreach ($this->certList as $item1) {
                    $res['CertList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1              = 0;
                foreach ($map['CertList'] as $item1) {
                    $model->certList[$n1++] = certList::fromMap($item1);
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
