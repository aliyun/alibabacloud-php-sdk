<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceResponseBody\serviceInfo;

use AlibabaCloud\Tea\Model;

class needRestartComponentNameList extends Model
{
    /**
     * @var string[]
     */
    public $service;
    protected $_name = [
        'service' => 'Service',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return needRestartComponentNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Service'])) {
            if (!empty($map['Service'])) {
                $model->service = $map['Service'];
            }
        }

        return $model;
    }
}
