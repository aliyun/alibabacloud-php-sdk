<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bsn\V20150512\Models\ProductBindBsnResponseBody;

use AlibabaCloud\Dara\Model;

class datas extends Model
{
    /**
     * @var string[]
     */
    public $bsnDO;
    protected $_name = [
        'bsnDO' => 'bsnDO',
    ];

    public function validate()
    {
        if (\is_array($this->bsnDO)) {
            Model::validateArray($this->bsnDO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bsnDO) {
            if (\is_array($this->bsnDO)) {
                $res['bsnDO'] = [];
                $n1 = 0;
                foreach ($this->bsnDO as $item1) {
                    $res['bsnDO'][$n1] = $item1;
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
        if (isset($map['bsnDO'])) {
            if (!empty($map['bsnDO'])) {
                $model->bsnDO = [];
                $n1 = 0;
                foreach ($map['bsnDO'] as $item1) {
                    $model->bsnDO[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
