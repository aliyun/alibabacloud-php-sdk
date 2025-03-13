<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemAttachmentCreatemetaResponseBody\uploadInfo;
use AlibabaCloud\Tea\Model;

class GetWorkitemAttachmentCreatemetaResponseBody extends Model
{
    /**
     * @example Invalid.IdNotFound
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example Forbidden.UserNotInCurrentOrganization
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example ASSDS-ASSASX-XSAXSA-XSAXSAXS
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @var uploadInfo
     */
    public $uploadInfo;
    protected $_name = [
        'errorCode'    => 'errorCode',
        'errorMessage' => 'errorMessage',
        'requestId'    => 'requestId',
        'success'      => 'success',
        'uploadInfo'   => 'uploadInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->uploadInfo) {
            $res['uploadInfo'] = null !== $this->uploadInfo ? $this->uploadInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorkitemAttachmentCreatemetaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['uploadInfo'])) {
            $model->uploadInfo = uploadInfo::fromMap($map['uploadInfo']);
        }

        return $model;
    }
}
