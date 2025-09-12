<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\CreateExternalCACertificateRequest\apiPassthrough;

use AlibabaCloud\Dara\Model;

class extensions extends Model
{
    /**
     * @var string[]
     */
    public $extendedKeyUsages;

    /**
     * @var int
     */
    public $pathLenConstraint;
    protected $_name = [
        'extendedKeyUsages' => 'ExtendedKeyUsages',
        'pathLenConstraint' => 'PathLenConstraint',
    ];

    public function validate()
    {
        if (\is_array($this->extendedKeyUsages)) {
            Model::validateArray($this->extendedKeyUsages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extendedKeyUsages) {
            if (\is_array($this->extendedKeyUsages)) {
                $res['ExtendedKeyUsages'] = [];
                $n1 = 0;
                foreach ($this->extendedKeyUsages as $item1) {
                    $res['ExtendedKeyUsages'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pathLenConstraint) {
            $res['PathLenConstraint'] = $this->pathLenConstraint;
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
        if (isset($map['ExtendedKeyUsages'])) {
            if (!empty($map['ExtendedKeyUsages'])) {
                $model->extendedKeyUsages = [];
                $n1 = 0;
                foreach ($map['ExtendedKeyUsages'] as $item1) {
                    $model->extendedKeyUsages[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PathLenConstraint'])) {
            $model->pathLenConstraint = $map['PathLenConstraint'];
        }

        return $model;
    }
}
