<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeFlowCategoryTreeResponseBody extends Model
{
    /**
     * @example {"node":{"categoryType":"FOLDER","gmtModified":1540344706000,"name":"FLOW","id":"FC-6B5B5BDAD3EFAB67","gmtCreate":1540344706000,"type":"FLOW","projectId":"FP-7A1018ADE9179EE1","parentId":"root_parent"},"children":[{"node":{"categoryType":"FILE","gmtModified":1542855766000,"name":"flow2","id":"FC-D30AC9A7795F03A1","gmtCreate":1542855766000,"type":"FLOW","projectId":"FP-7A1018ADE9179EE1","parentId":"FC-6B5B5BDAD3EFAB67","objectId":"F-E9DC5533695C989B","objectType":"FLOW"},"children":[],"childrenMap":{}},{"node":{"categoryType":"FILE","gmtModified":1540796206000,"name":"flow-hive","id":"FC-296E3BB9491E39F2","gmtCreate":1540796206000,"type":"FLOW","projectId":"FP-7A1018ADE9179EE1","parentId":"FC-6B5B5BDAD3EFAB67","objectId":"F-35683D0E45734E34","objectType":"FLOW"},"children":[],"childrenMap":{}}]}
     *
     * @var string
     */
    public $data;

    /**
     * @example 5C5E4A6F-5140-4627-AB81-F3E0D06C5C36
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowCategoryTreeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
