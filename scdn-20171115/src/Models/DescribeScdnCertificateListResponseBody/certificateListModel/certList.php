<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCertificateListResponseBody\certificateListModel;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCertificateListResponseBody\certificateListModel\certList\cert;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cert) {
            $res['Cert'] = [];
            if (null !== $this->cert && \is_array($this->cert)) {
                $n = 0;
                foreach ($this->cert as $item) {
                    $res['Cert'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cert'])) {
            if (!empty($map['Cert'])) {
                $model->cert = [];
                $n           = 0;
                foreach ($map['Cert'] as $item) {
                    $model->cert[$n++] = null !== $item ? cert::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
