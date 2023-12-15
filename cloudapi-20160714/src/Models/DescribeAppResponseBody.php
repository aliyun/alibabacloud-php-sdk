<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppResponseBody extends Model
{
    /**
     * @description The ID of the app.
     *
     * @example 110843374
     *
     * @var int
     */
    public $appId;

    /**
     * @description The name of the app.
     *
     * @example CreateApptest
     *
     * @var string
     */
    public $appName;

    /**
     * @description The time when the app was created.
     *
     * @example 2019-01-29T09:33:01Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The description of the app.
     *
     * @example Estimated on October 15, 2021 at 10:20:27
     *
     * @var string
     */
    public $description;

    /**
     * @description The extended information.
     *
     * @example 110243810311
     *
     * @var string
     */
    public $extend;

    /**
     * @description The time when the app was modified.
     *
     * @example 2019-01-29T09:33:01Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The ID of the request.
     *
     * @example DBDB3B0F-EC61-5F33-88AD-EC2446FA1DDB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appId'        => 'AppId',
        'appName'      => 'AppName',
        'createdTime'  => 'CreatedTime',
        'description'  => 'Description',
        'extend'       => 'Extend',
        'modifiedTime' => 'ModifiedTime',
        'requestId'    => 'RequestId',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
