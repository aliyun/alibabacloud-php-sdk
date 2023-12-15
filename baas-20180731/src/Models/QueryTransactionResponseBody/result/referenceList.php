<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\QueryTransactionResponseBody\result;

use AlibabaCloud\Tea\Model;

class referenceList extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @var int
     */
    public $length;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'data'   => 'Data',
        'length' => 'Length',
        'type'   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return referenceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
