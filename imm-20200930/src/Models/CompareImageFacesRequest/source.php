<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CompareImageFacesRequest;

use AlibabaCloud\Dara\Model;

class source extends Model
{
    /**
     * @var string
     */
    public $URI1;

    /**
     * @var string
     */
    public $URI2;
    protected $_name = [
        'URI1' => 'URI1',
        'URI2' => 'URI2',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->URI1) {
            $res['URI1'] = $this->URI1;
        }

        if (null !== $this->URI2) {
            $res['URI2'] = $this->URI2;
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
        if (isset($map['URI1'])) {
            $model->URI1 = $map['URI1'];
        }

        if (isset($map['URI2'])) {
            $model->URI2 = $map['URI2'];
        }

        return $model;
    }
}
