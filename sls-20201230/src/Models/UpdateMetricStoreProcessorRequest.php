<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class UpdateMetricStoreProcessorRequest extends Model
{
    /**
     * @var string
     */
    public $processorName;
    protected $_name = [
        'processorName' => 'processorName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processorName) {
            $res['processorName'] = $this->processorName;
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
        if (isset($map['processorName'])) {
            $model->processorName = $map['processorName'];
        }

        return $model;
    }
}
