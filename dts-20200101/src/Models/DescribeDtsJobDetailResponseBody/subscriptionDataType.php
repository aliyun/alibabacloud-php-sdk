<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody;

use AlibabaCloud\Dara\Model;

class subscriptionDataType extends Model
{
    /**
     * @var bool
     */
    public $ddl;

    /**
     * @var bool
     */
    public $dml;
    protected $_name = [
        'ddl' => 'Ddl',
        'dml' => 'Dml',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ddl) {
            $res['Ddl'] = $this->ddl;
        }

        if (null !== $this->dml) {
            $res['Dml'] = $this->dml;
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
        if (isset($map['Ddl'])) {
            $model->ddl = $map['Ddl'];
        }

        if (isset($map['Dml'])) {
            $model->dml = $map['Dml'];
        }

        return $model;
    }
}
