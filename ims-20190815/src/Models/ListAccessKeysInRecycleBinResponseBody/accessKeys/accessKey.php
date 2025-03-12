<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysInRecycleBinResponseBody\accessKeys;

use AlibabaCloud\Tea\Model;

class accessKey extends Model
{
    /**
     * @description The AccessKey ID.
     *
     * @example LTAI4GFTgcR8m8cZQDTH****
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description The time when the AccessKey pair was created.
     *
     * @example 2020-10-11T09:12:00Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The time when the AccessKey pair will be permanently deleted from the recycle bin.
     *
     * @example 2020-11-12T09:12:00Z
     *
     * @var string
     */
    public $deleteDate;

    /**
     * @description The time when the AccessKey pair was deleted and moved to the recycle bin.
     *
     * @example 2020-10-12T09:12:00Z
     *
     * @var string
     */
    public $recycleDate;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'createDate'  => 'CreateDate',
        'deleteDate'  => 'DeleteDate',
        'recycleDate' => 'RecycleDate',
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
        if (null !== $this->deleteDate) {
            $res['DeleteDate'] = $this->deleteDate;
        }
        if (null !== $this->recycleDate) {
            $res['RecycleDate'] = $this->recycleDate;
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
        if (isset($map['DeleteDate'])) {
            $model->deleteDate = $map['DeleteDate'];
        }
        if (isset($map['RecycleDate'])) {
            $model->recycleDate = $map['RecycleDate'];
        }

        return $model;
    }
}
