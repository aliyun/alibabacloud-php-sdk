<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource;

use AlibabaCloud\Tea\Model;

class isp extends Model
{
    /**
     * @var string[]
     */
    public $isp;
    protected $_name = [
        'isp' => 'Isp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return isp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Isp'])) {
            if (!empty($map['Isp'])) {
                $model->isp = $map['Isp'];
            }
        }

        return $model;
    }
}
