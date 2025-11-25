<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;

class GetNodeOutputRequest extends Model
{
    /**
     * @var string
     */
    public $outputIndex;
    protected $_name = [
        'outputIndex' => 'OutputIndex',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outputIndex) {
            $res['OutputIndex'] = $this->outputIndex;
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
        if (isset($map['OutputIndex'])) {
            $model->outputIndex = $map['OutputIndex'];
        }

        return $model;
    }
}
