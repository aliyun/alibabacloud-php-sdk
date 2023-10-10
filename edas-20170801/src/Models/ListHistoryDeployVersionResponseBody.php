<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListHistoryDeployVersionResponseBody\packageVersionList;
use AlibabaCloud\Tea\Model;

class ListHistoryDeployVersionResponseBody extends Model
{
    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The additional information that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The information about historical deployment packages.
     *
     * @var packageVersionList
     */
    public $packageVersionList;

    /**
     * @description The ID of the request.
     *
     * @example D16979DC-4D42-************
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'               => 'Code',
        'message'            => 'Message',
        'packageVersionList' => 'PackageVersionList',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->packageVersionList) {
            $res['PackageVersionList'] = null !== $this->packageVersionList ? $this->packageVersionList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PackageVersionList'])) {
            $model->packageVersionList = packageVersionList::fromMap($map['PackageVersionList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
