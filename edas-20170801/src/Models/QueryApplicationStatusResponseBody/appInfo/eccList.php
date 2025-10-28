<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\eccList\ecc;

class eccList extends Model
{
    /**
     * @var ecc[]
     */
    public $ecc;
    protected $_name = [
        'ecc' => 'Ecc',
    ];

    public function validate()
    {
        if (\is_array($this->ecc)) {
            Model::validateArray($this->ecc);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecc) {
            if (\is_array($this->ecc)) {
                $res['Ecc'] = [];
                $n1 = 0;
                foreach ($this->ecc as $item1) {
                    $res['Ecc'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Ecc'])) {
            if (!empty($map['Ecc'])) {
                $model->ecc = [];
                $n1 = 0;
                foreach ($map['Ecc'] as $item1) {
                    $model->ecc[$n1] = ecc::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
