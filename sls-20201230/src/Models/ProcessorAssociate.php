<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ProcessorAssociate extends Model
{
    /**
     * @var string
     */
    public $processorId;
    protected $_name = [
        'processorId' => 'processorId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processorId) {
            $res['processorId'] = $this->processorId;
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
        if (isset($map['processorId'])) {
            $model->processorId = $map['processorId'];
        }

        return $model;
    }
}
