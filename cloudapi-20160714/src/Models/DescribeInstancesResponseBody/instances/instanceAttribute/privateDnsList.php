<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute;

use AlibabaCloud\Tea\Model;

class privateDnsList extends Model
{
    /**
     * @var string[]
     */
    public $privateDns;
    protected $_name = [
        'privateDns' => 'PrivateDns',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privateDns) {
            $res['PrivateDns'] = $this->privateDns;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateDnsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivateDns'])) {
            if (!empty($map['PrivateDns'])) {
                $model->privateDns = $map['PrivateDns'];
            }
        }

        return $model;
    }
}
