<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RetryTransferOwnershipRequest;

use AlibabaCloud\Dara\Model;

class privilegeTransferRecord extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $newOwner;

    /**
     * @var string
     */
    public $transferComment;
    protected $_name = [
        'id' => 'Id',
        'newOwner' => 'NewOwner',
        'transferComment' => 'TransferComment',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->newOwner) {
            $res['NewOwner'] = $this->newOwner;
        }

        if (null !== $this->transferComment) {
            $res['TransferComment'] = $this->transferComment;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['NewOwner'])) {
            $model->newOwner = $map['NewOwner'];
        }

        if (isset($map['TransferComment'])) {
            $model->transferComment = $map['TransferComment'];
        }

        return $model;
    }
}
