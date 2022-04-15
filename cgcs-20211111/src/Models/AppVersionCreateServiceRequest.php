<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class AppVersionCreateServiceRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appVersionName;

    /**
     * @var string
     */
    public $fileAddress;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $fileUploadType;

    /**
     * @var string
     */
    public $requestApp;
    protected $_name = [
        'appId'          => 'AppId',
        'appVersionName' => 'AppVersionName',
        'fileAddress'    => 'FileAddress',
        'fileSize'       => 'FileSize',
        'fileUploadType' => 'FileUploadType',
        'requestApp'     => 'RequestApp',
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
        if (null !== $this->appVersionName) {
            $res['AppVersionName'] = $this->appVersionName;
        }
        if (null !== $this->fileAddress) {
            $res['FileAddress'] = $this->fileAddress;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->fileUploadType) {
            $res['FileUploadType'] = $this->fileUploadType;
        }
        if (null !== $this->requestApp) {
            $res['RequestApp'] = $this->requestApp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppVersionCreateServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersionName'])) {
            $model->appVersionName = $map['AppVersionName'];
        }
        if (isset($map['FileAddress'])) {
            $model->fileAddress = $map['FileAddress'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['FileUploadType'])) {
            $model->fileUploadType = $map['FileUploadType'];
        }
        if (isset($map['RequestApp'])) {
            $model->requestApp = $map['RequestApp'];
        }

        return $model;
    }
}
