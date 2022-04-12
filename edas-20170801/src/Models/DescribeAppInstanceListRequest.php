<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppInstanceListRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
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
