<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\DBNodeClassList;

use AlibabaCloud\Dara\Model;

class DBNodeClass extends Model
{
    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'text' => 'Text',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
