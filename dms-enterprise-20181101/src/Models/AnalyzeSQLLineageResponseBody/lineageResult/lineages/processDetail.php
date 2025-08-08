<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageResponseBody\lineageResult\lineages;

use AlibabaCloud\Dara\Model;

class processDetail extends Model
{
    /**
     * @var string
     */
    public $calWay;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'calWay' => 'CalWay',
        'code' => 'Code',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calWay) {
            $res['CalWay'] = $this->calWay;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (isset($map['CalWay'])) {
            $model->calWay = $map['CalWay'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
