<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectBackupFilesResponseBody\dataCorrectBackupFiles;
use AlibabaCloud\Tea\Model;

class GetDataCorrectBackupFilesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var dataCorrectBackupFiles
     */
    public $dataCorrectBackupFiles;
    protected $_name = [
        'requestId'              => 'RequestId',
        'errorCode'              => 'ErrorCode',
        'errorMessage'           => 'ErrorMessage',
        'success'                => 'Success',
        'dataCorrectBackupFiles' => 'DataCorrectBackupFiles',
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
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->dataCorrectBackupFiles) {
            $res['DataCorrectBackupFiles'] = null !== $this->dataCorrectBackupFiles ? $this->dataCorrectBackupFiles->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataCorrectBackupFilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['DataCorrectBackupFiles'])) {
            $model->dataCorrectBackupFiles = dataCorrectBackupFiles::fromMap($map['DataCorrectBackupFiles']);
        }

        return $model;
    }
}
