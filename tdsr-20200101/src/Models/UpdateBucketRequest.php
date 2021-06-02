<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models;

use AlibabaCloud\Tea\Model;

class UpdateBucketRequest extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @description bucket名称
     *
     * @var string
     */
    public $newBucketName;
    protected $_name = [
        'id'            => 'Id',
        'newBucketName' => 'NewBucketName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->newBucketName) {
            $res['NewBucketName'] = $this->newBucketName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBucketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['NewBucketName'])) {
            $model->newBucketName = $map['NewBucketName'];
        }

        return $model;
    }
}
