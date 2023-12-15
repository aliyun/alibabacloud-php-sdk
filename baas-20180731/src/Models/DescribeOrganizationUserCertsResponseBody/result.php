<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationUserCertsResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationUserCertsResponseBody\result\certificates;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationUserCertsResponseBody\result\keyPair;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var certificates[]
     */
    public $certificates;

    /**
     * @var keyPair
     */
    public $keyPair;
    protected $_name = [
        'certificates' => 'Certificates',
        'keyPair'      => 'KeyPair',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificates) {
            $res['Certificates'] = [];
            if (null !== $this->certificates && \is_array($this->certificates)) {
                $n = 0;
                foreach ($this->certificates as $item) {
                    $res['Certificates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->keyPair) {
            $res['KeyPair'] = null !== $this->keyPair ? $this->keyPair->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Certificates'])) {
            if (!empty($map['Certificates'])) {
                $model->certificates = [];
                $n                   = 0;
                foreach ($map['Certificates'] as $item) {
                    $model->certificates[$n++] = null !== $item ? certificates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['KeyPair'])) {
            $model->keyPair = keyPair::fromMap($map['KeyPair']);
        }

        return $model;
    }
}
