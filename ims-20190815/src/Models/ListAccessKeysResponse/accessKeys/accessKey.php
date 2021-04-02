<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysResponse\accessKeys;

use AlibabaCloud\Tea\Model;

class accessKey extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateDate;

    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $createDate;
    protected $_name = [
        'status'      => 'Status',
        'updateDate'  => 'UpdateDate',
        'accessKeyId' => 'AccessKeyId',
        'createDate'  => 'CreateDate',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('updateDate', $this->updateDate, true);
        Model::validateRequired('accessKeyId', $this->accessKeyId, true);
        Model::validateRequired('createDate', $this->createDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        return $model;
    }
}
