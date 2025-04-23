<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateClusterRequest;

use AlibabaCloud\Dara\Model;

class dataNode extends Model
{
    /**
     * @var int
     */
    public $number;

    /**
     * @var string
     */
    public $partition;
    protected $_name = [
        'number' => 'number',
        'partition' => 'partition',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->number) {
            $res['number'] = $this->number;
        }

        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
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
        if (isset($map['number'])) {
            $model->number = $map['number'];
        }

        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }

        return $model;
    }
}
