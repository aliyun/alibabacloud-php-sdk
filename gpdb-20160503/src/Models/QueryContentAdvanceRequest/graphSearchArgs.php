<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentAdvanceRequest;

use AlibabaCloud\Dara\Model;

class graphSearchArgs extends Model
{
    /**
     * @var int
     */
    public $graphTopK;
    protected $_name = [
        'graphTopK' => 'GraphTopK',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->graphTopK) {
            $res['GraphTopK'] = $this->graphTopK;
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
        if (isset($map['GraphTopK'])) {
            $model->graphTopK = $map['GraphTopK'];
        }

        return $model;
    }
}
