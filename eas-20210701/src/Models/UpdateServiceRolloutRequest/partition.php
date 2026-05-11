<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceRolloutRequest;

use AlibabaCloud\Dara\Model;

class partition extends Model
{
    /**
     * @var string
     */
    public $partition;
    protected $_name = [
        'partition' => 'Partition',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
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
        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
        }

        return $model;
    }
}
