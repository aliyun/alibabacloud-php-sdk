<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppInstanceListRequest extends Model
{
    /**
     * @description The ID of the application. You can call the ListApplication operation to query the ID of the application. For more information, see [ListApplication](~~149390~~).
     *
     * @example 93fdd228-*****-ed2ae98de18d
     *
     * @var string
     */
    public $appId;

    /**
     * @description Specifies whether to return the information about the node in which the pod resides.
     *
     *   `true`: returns the information about the node in which the pod resides
     *   `false`: does not return the information about the node in which the pod resides
     *
     * @example true
     *
     * @var bool
     */
    public $withNodeInfo;
    protected $_name = [
        'appId'        => 'AppId',
        'withNodeInfo' => 'WithNodeInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->withNodeInfo) {
            $res['WithNodeInfo'] = $this->withNodeInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppInstanceListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['WithNodeInfo'])) {
            $model->withNodeInfo = $map['WithNodeInfo'];
        }

        return $model;
    }
}
