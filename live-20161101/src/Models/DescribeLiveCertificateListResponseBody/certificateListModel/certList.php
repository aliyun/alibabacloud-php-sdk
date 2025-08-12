<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCertificateListResponseBody\certificateListModel;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCertificateListResponseBody\certificateListModel\certList\cert;

class certList extends Model
{
    /**
     * @var cert[]
     */
    public $cert;
    protected $_name = [
        'cert' => 'Cert',
    ];

    public function validate()
    {
        if (\is_array($this->cert)) {
            Model::validateArray($this->cert);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cert) {
            if (\is_array($this->cert)) {
                $res['Cert'] = [];
                $n1 = 0;
                foreach ($this->cert as $item1) {
                    $res['Cert'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Cert'])) {
            if (!empty($map['Cert'])) {
                $model->cert = [];
                $n1 = 0;
                foreach ($map['Cert'] as $item1) {
                    $model->cert[$n1] = cert::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
