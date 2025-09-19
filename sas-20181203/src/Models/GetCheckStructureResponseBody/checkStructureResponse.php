<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckStructureResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckStructureResponseBody\checkStructureResponse\standards;

class checkStructureResponse extends Model
{
    /**
     * @var string
     */
    public $standardType;

    /**
     * @var standards[]
     */
    public $standards;
    protected $_name = [
        'standardType' => 'StandardType',
        'standards' => 'Standards',
    ];

    public function validate()
    {
        if (\is_array($this->standards)) {
            Model::validateArray($this->standards);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->standardType) {
            $res['StandardType'] = $this->standardType;
        }

        if (null !== $this->standards) {
            if (\is_array($this->standards)) {
                $res['Standards'] = [];
                $n1 = 0;
                foreach ($this->standards as $item1) {
                    $res['Standards'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['StandardType'])) {
            $model->standardType = $map['StandardType'];
        }

        if (isset($map['Standards'])) {
            if (!empty($map['Standards'])) {
                $model->standards = [];
                $n1 = 0;
                foreach ($map['Standards'] as $item1) {
                    $model->standards[$n1] = standards::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
