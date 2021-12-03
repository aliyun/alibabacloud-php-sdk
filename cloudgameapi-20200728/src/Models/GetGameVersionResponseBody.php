<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class GetGameVersionResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 版本ID
     *
     * @var string
     */
    public $versionId;

    /**
     * @description 版本名称
     *
     * @var string
     */
    public $versionName;

    /**
     * @description 版本号
     *
     * @var string
     */
    public $versionNumber;
    protected $_name = [
        'requestId'     => 'RequestId',
        'versionId'     => 'VersionId',
        'versionName'   => 'VersionName',
        'versionNumber' => 'VersionNumber',
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
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }
        if (null !== $this->versionNumber) {
            $res['VersionNumber'] = $this->versionNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGameVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }
        if (isset($map['VersionNumber'])) {
            $model->versionNumber = $map['VersionNumber'];
        }

        return $model;
    }
}
