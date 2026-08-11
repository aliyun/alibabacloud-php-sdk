<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetEncryptionConfigResponseBody;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $keyArn;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'alias' => 'alias',
        'creator' => 'creator',
        'keyArn' => 'keyArn',
        'keyId' => 'keyId',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->keyArn) {
            $res['keyArn'] = $this->keyArn;
        }

        if (null !== $this->keyId) {
            $res['keyId'] = $this->keyId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['keyArn'])) {
            $model->keyArn = $map['keyArn'];
        }

        if (isset($map['keyId'])) {
            $model->keyId = $map['keyId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
