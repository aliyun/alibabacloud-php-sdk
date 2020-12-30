<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeCACertificatesResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeCACertificatesResponseBody\CACertificates\CACertificate;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CACertificate) {
            $res['CACertificate'] = [];
            if (null !== $this->CACertificate && \is_array($this->CACertificate)) {
                $n = 0;
                foreach ($this->CACertificate as $item) {
                    $res['CACertificate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CACertificates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CACertificate'])) {
            if (!empty($map['CACertificate'])) {
                $model->CACertificate = [];
                $n                    = 0;
                foreach ($map['CACertificate'] as $item) {
                    $model->CACertificate[$n++] = null !== $item ? CACertificate::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
