<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListRecognitionLibsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListRecognitionLibsResponseBody\libs\lib;

class libs extends Model
{
    /**
     * @var lib[]
     */
    public $lib;
    protected $_name = [
        'lib' => 'Lib',
    ];

    public function validate()
    {
        if (\is_array($this->lib)) {
            Model::validateArray($this->lib);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lib) {
            if (\is_array($this->lib)) {
                $res['Lib'] = [];
                $n1 = 0;
                foreach ($this->lib as $item1) {
                    $res['Lib'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Lib'])) {
            if (!empty($map['Lib'])) {
                $model->lib = [];
                $n1 = 0;
                foreach ($map['Lib'] as $item1) {
                    $model->lib[$n1] = lib::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
