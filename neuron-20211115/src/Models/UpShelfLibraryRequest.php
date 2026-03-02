<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class UpShelfLibraryRequest extends Model
{
    /**
     * @var int
     */
    public $marketId;
    protected $_name = [
        'marketId' => 'marketId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
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
        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        return $model;
    }
}
