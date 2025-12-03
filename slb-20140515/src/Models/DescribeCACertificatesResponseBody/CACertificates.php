<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeCACertificatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeCACertificatesResponseBody\CACertificates\CACertificate;

class CACertificates extends Model
{
    /**
     * @var CACertificate[]
     */
    public $CACertificate;
    protected $_name = [
        'CACertificate' => 'CACertificate',
    ];

    public function validate()
    {
        if (\is_array($this->CACertificate)) {
            Model::validateArray($this->CACertificate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CACertificate) {
            if (\is_array($this->CACertificate)) {
                $res['CACertificate'] = [];
                $n1 = 0;
                foreach ($this->CACertificate as $item1) {
                    $res['CACertificate'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CACertificate'])) {
            if (!empty($map['CACertificate'])) {
                $model->CACertificate = [];
                $n1 = 0;
                foreach ($map['CACertificate'] as $item1) {
                    $model->CACertificate[$n1] = CACertificate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
