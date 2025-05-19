<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\QuerySampleConsistencyJobDifferenceResponseBody;

use AlibabaCloud\Dara\Model;

class differenceHistogram extends Model
{
    /**
     * @var string
     */
    public $abscissa;

    /**
     * @var int
     */
    public $value;
    protected $_name = [
        'abscissa' => 'Abscissa',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abscissa) {
            $res['Abscissa'] = $this->abscissa;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Abscissa'])) {
            $model->abscissa = $map['Abscissa'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
