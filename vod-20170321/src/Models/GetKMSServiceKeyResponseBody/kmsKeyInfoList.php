<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetKMSServiceKeyResponseBody;

use AlibabaCloud\Dara\Model;

class kmsKeyInfoList extends Model
{
    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $creationDate;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $deleteDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $keyState;

    /**
     * @var string
     */
    public $keyUsage;
    protected $_name = [
        'arn' => 'Arn',
        'creationDate' => 'CreationDate',
        'creator' => 'Creator',
        'deleteDate' => 'DeleteDate',
        'description' => 'Description',
        'keyId' => 'KeyId',
        'keyState' => 'KeyState',
        'keyUsage' => 'KeyUsage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        if (null !== $this->creationDate) {
            $res['CreationDate'] = $this->creationDate;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->deleteDate) {
            $res['DeleteDate'] = $this->deleteDate;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }

        if (null !== $this->keyState) {
            $res['KeyState'] = $this->keyState;
        }

        if (null !== $this->keyUsage) {
            $res['KeyUsage'] = $this->keyUsage;
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
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        if (isset($map['CreationDate'])) {
            $model->creationDate = $map['CreationDate'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['DeleteDate'])) {
            $model->deleteDate = $map['DeleteDate'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        if (isset($map['KeyState'])) {
            $model->keyState = $map['KeyState'];
        }

        if (isset($map['KeyUsage'])) {
            $model->keyUsage = $map['KeyUsage'];
        }

        return $model;
    }
}
