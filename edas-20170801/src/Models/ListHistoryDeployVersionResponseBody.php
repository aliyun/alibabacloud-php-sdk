<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListHistoryDeployVersionResponseBody\packageVersionList;
use AlibabaCloud\Tea\Model;

class ListHistoryDeployVersionResponseBody extends Model
{
    /**
     * @var packageVersionList
     */
    public $packageVersionList;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'packageVersionList' => 'PackageVersionList',
        'message'            => 'Message',
        'requestId'          => 'RequestId',
        'code'               => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packageVersionList) {
            $res['PackageVersionList'] = null !== $this->packageVersionList ? $this->packageVersionList->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHistoryDeployVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PackageVersionList'])) {
            $model->packageVersionList = packageVersionList::fromMap($map['PackageVersionList']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
