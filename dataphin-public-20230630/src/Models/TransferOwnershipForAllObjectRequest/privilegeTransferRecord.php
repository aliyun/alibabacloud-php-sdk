<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\TransferOwnershipForAllObjectRequest;

use AlibabaCloud\Dara\Model;

class privilegeTransferRecord extends Model
{
    /**
     * @var string
     */
    public $newOwner;

    /**
     * @var string
     */
    public $oldOwner;

    /**
     * @var string
     */
    public $transferComment;
    protected $_name = [
        'newOwner' => 'NewOwner',
        'oldOwner' => 'OldOwner',
        'transferComment' => 'TransferComment',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newOwner) {
            $res['NewOwner'] = $this->newOwner;
        }

        if (null !== $this->oldOwner) {
            $res['OldOwner'] = $this->oldOwner;
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
        if (isset($map['NewOwner'])) {
            $model->newOwner = $map['NewOwner'];
        }

        if (isset($map['OldOwner'])) {
            $model->oldOwner = $map['OldOwner'];
        }

        if (isset($map['TransferComment'])) {
            $model->transferComment = $map['TransferComment'];
        }

        return $model;
    }
}
