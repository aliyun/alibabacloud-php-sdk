<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\CreateAccessKeyResponseBody;

use AlibabaCloud\Tea\Model;

class accessKey extends Model
{
    /**
     * @description The AccessKey ID.
     *
     * @example 0wNEpMMlzy7s****
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description The AccessKey secret.
     *
     * @example PupkTg8jdmau1cXxYacgE736PJ****
     *
     * @var string
     */
    public $accessKeySecret;

    /**
     * @description The time when the AccessKey pair was created.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The status of the AccessKey pair. Valid values: Active and Inactive.
     *
     * @example Active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'accessKeyId'     => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'createDate'      => 'CreateDate',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessKey
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
