<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class RequestServiceOfCloudDBAResponseBody extends Model
{
    /**
     * @var string
     */
    public $attrData;

    /**
     * @var string
     */
    public $listData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attrData'  => 'AttrData',
        'listData'  => 'ListData',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attrData) {
            $res['AttrData'] = $this->attrData;
        }
        if (null !== $this->listData) {
            $res['ListData'] = $this->listData;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RequestServiceOfCloudDBAResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttrData'])) {
            $model->attrData = $map['AttrData'];
        }
        if (isset($map['ListData'])) {
            $model->listData = $map['ListData'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
