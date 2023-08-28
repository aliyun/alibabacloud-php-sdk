<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CdnFileDownloadCallbackInfo extends Model
{
    /**
     * @example ccp-bj1-bj-1234
     *
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var int
     */
    public $expire;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $object;

    /**
     * @example md5.Sum([]byte(fmt.Sprintf("%v%v%v%v%v%v...%v", 		req.Object, req.Range, req.DomainID, req.DriveID, req.UserID, req.FileID, req.Expire)))
     *
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bucket'   => 'bucket',
        'domainId' => 'domain_id',
        'driveId'  => 'drive_id',
        'expire'   => 'expire',
        'fileId'   => 'file_id',
        'object'   => 'object',
        'token'    => 'token',
        'userId'   => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['bucket'] = $this->bucket;
        }
        if (null !== $this->domainId) {
            $res['domain_id'] = $this->domainId;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->expire) {
            $res['expire'] = $this->expire;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->object) {
            $res['object'] = $this->object;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CdnFileDownloadCallbackInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bucket'])) {
            $model->bucket = $map['bucket'];
        }
        if (isset($map['domain_id'])) {
            $model->domainId = $map['domain_id'];
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['expire'])) {
            $model->expire = $map['expire'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['object'])) {
            $model->object = $map['object'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
