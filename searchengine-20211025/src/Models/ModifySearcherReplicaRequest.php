<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ModifySearcherReplicaRequest extends Model
{
    /**
     * @var int
     */
    public $partition;

    /**
     * @var int
     */
    public $replica;
    protected $_name = [
        'partition' => 'partition',
        'replica' => 'replica',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }

        if (null !== $this->replica) {
            $res['replica'] = $this->replica;
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
        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }

        if (isset($map['replica'])) {
            $model->replica = $map['replica'];
        }

        return $model;
    }
}
