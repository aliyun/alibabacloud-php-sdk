<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ListIspTypesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $ispTypeList;

    /**
     * @example F591955F-5CB5-4CCE-A75D-17CF2085CE22
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ispTypeList' => 'IspTypeList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ispTypeList) {
            $res['IspTypeList'] = $this->ispTypeList;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIspTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IspTypeList'])) {
            if (!empty($map['IspTypeList'])) {
                $model->ispTypeList = $map['IspTypeList'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
