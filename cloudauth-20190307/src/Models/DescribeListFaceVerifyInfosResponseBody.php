<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeListFaceVerifyInfosResponseBody\faceVerifyInfos;

class DescribeListFaceVerifyInfosResponseBody extends Model
{
    /**
     * @var faceVerifyInfos[]
     */
    public $faceVerifyInfos;

    /**
     * @var int
     */
    public $itemsPerPage;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'faceVerifyInfos' => 'FaceVerifyInfos',
        'itemsPerPage' => 'ItemsPerPage',
        'pageNumber' => 'PageNumber',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'totalPages' => 'TotalPages',
    ];

    public function validate()
    {
        if (\is_array($this->faceVerifyInfos)) {
            Model::validateArray($this->faceVerifyInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceVerifyInfos) {
            if (\is_array($this->faceVerifyInfos)) {
                $res['FaceVerifyInfos'] = [];
                $n1 = 0;
                foreach ($this->faceVerifyInfos as $item1) {
                    $res['FaceVerifyInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->itemsPerPage) {
            $res['ItemsPerPage'] = $this->itemsPerPage;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
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
        if (isset($map['FaceVerifyInfos'])) {
            if (!empty($map['FaceVerifyInfos'])) {
                $model->faceVerifyInfos = [];
                $n1 = 0;
                foreach ($map['FaceVerifyInfos'] as $item1) {
                    $model->faceVerifyInfos[$n1] = faceVerifyInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ItemsPerPage'])) {
            $model->itemsPerPage = $map['ItemsPerPage'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}
