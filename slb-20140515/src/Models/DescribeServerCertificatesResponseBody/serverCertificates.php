<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeServerCertificatesResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeServerCertificatesResponseBody\serverCertificates\serverCertificate;
use AlibabaCloud\Tea\Model;

class serverCertificates extends Model
{
    /**
     * @var serverCertificate[]
     */
    public $serverCertificate;
    protected $_name = [
        'serverCertificate' => 'ServerCertificate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverCertificate) {
            $res['ServerCertificate'] = [];
            if (null !== $this->serverCertificate && \is_array($this->serverCertificate)) {
                $n = 0;
                foreach ($this->serverCertificate as $item) {
                    $res['ServerCertificate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverCertificates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerCertificate'])) {
            if (!empty($map['ServerCertificate'])) {
                $model->serverCertificate = [];
                $n                        = 0;
                foreach ($map['ServerCertificate'] as $item) {
                    $model->serverCertificate[$n++] = null !== $item ? serverCertificate::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
