<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysResponseBody\accessKeys;

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
     * @description The time when the AccessKey pair was created.
     *
     * @example 2020-10-13T12:33:18Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The status of the AccessKey pair. Valid values:
     *
     *   Active
     *   Inactive
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the AccessKey pair was updated.
     *
     * @example 2020-10-13T12:33:18Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'createDate'  => 'CreateDate',
        'status'      => 'Status',
        'updateDate'  => 'UpdateDate',
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
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
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
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
