<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListBucketsHeaders extends Model
{
    public $commonHeaders;

    /**
     * @var string
     */
    public $xOssResourceGroupId;
    protected $_name = [
        'xOssResourceGroupId' => 'x-oss-resource-group-id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->xOssResourceGroupId) {
            $res['x-oss-resource-group-id'] = $this->xOssResourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBucketsHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['x-oss-resource-group-id'])) {
            $model->xOssResourceGroupId = $map['x-oss-resource-group-id'];
        }

        return $model;
    }
}
