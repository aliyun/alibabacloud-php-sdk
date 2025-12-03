<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeServerCertificatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeServerCertificatesResponseBody\serverCertificates\serverCertificate;

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
        if (\is_array($this->serverCertificate)) {
            Model::validateArray($this->serverCertificate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serverCertificate) {
            if (\is_array($this->serverCertificate)) {
                $res['ServerCertificate'] = [];
                $n1 = 0;
                foreach ($this->serverCertificate as $item1) {
                    $res['ServerCertificate'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ServerCertificate'])) {
            if (!empty($map['ServerCertificate'])) {
                $model->serverCertificate = [];
                $n1 = 0;
                foreach ($map['ServerCertificate'] as $item1) {
                    $model->serverCertificate[$n1] = serverCertificate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
