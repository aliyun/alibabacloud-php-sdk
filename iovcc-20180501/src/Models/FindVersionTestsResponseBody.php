<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionTestsResponseBody\versionTestList;
use AlibabaCloud\Tea\Model;

class FindVersionTestsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var versionTestList
     */
    public $versionTestList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'versionTestList' => 'VersionTestList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->versionTestList) {
            $res['VersionTestList'] = null !== $this->versionTestList ? $this->versionTestList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindVersionTestsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VersionTestList'])) {
            $model->versionTestList = versionTestList::fromMap($map['VersionTestList']);
        }

        return $model;
    }
}
