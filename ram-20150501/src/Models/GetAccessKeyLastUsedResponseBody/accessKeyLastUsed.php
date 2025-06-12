<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetAccessKeyLastUsedResponseBody;

use AlibabaCloud\Dara\Model;

class accessKeyLastUsed extends Model
{
    /**
     * @var string
     */
    public $lastUsedDate;
    protected $_name = [
        'lastUsedDate' => 'LastUsedDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastUsedDate) {
            $res['LastUsedDate'] = $this->lastUsedDate;
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
        if (isset($map['LastUsedDate'])) {
            $model->lastUsedDate = $map['LastUsedDate'];
        }

        return $model;
    }
}
