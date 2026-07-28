<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Dara\Model;

class RamAccount extends Model
{
    /**
     * @var bool
     */
    public $bindable;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'bindable' => 'bindable',
        'displayName' => 'displayName',
        'uid' => 'uid',
        'userName' => 'userName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindable) {
            $res['bindable'] = $this->bindable;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
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
        if (isset($map['bindable'])) {
            $model->bindable = $map['bindable'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}
