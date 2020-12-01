<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysResponse\accessKeys;

use AlibabaCloud\Tea\Model;

class accessKey extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $updateDate;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'createDate'  => 'CreateDate',
        'updateDate'  => 'UpdateDate',
        'status'      => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('accessKeyId', $this->accessKeyId, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('updateDate', $this->updateDate, true);
        Model::validateRequired('status', $this->status, true);
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
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
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
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
