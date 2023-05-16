<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageSharePermissionRequest extends Model
{
    /**
     * @var int
     */
    public $aliyunId;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;
    protected $_name = [
        'aliyunId'   => 'AliyunId',
        'imageId'    => 'ImageId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunId) {
            $res['AliyunId'] = $this->aliyunId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageSharePermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunId'])) {
            $model->aliyunId = $map['AliyunId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
