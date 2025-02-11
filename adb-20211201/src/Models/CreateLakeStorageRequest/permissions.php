<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CreateLakeStorageRequest;

use AlibabaCloud\Dara\Model;

class permissions extends Model
{
    /**
     * @var string
     */
    public $account;
    /**
     * @var bool
     */
    public $read;
    /**
     * @var string
     */
    public $type;
    /**
     * @var bool
     */
    public $write;
    protected $_name = [
        'account' => 'Account',
        'read'    => 'Read',
        'type'    => 'Type',
        'write'   => 'Write',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }

        if (null !== $this->read) {
            $res['Read'] = $this->read;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->write) {
            $res['Write'] = $this->write;
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
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }

        if (isset($map['Read'])) {
            $model->read = $map['Read'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Write'])) {
            $model->write = $map['Write'];
        }

        return $model;
    }
}
