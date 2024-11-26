<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class GetEnvironmentRequest extends Model
{
    /**
     * @var bool
     */
    public $withStatistics;

    /**
     * @description Option for vpc info.
     *
     * @var bool
     */
    public $withVpcInfo;
    protected $_name = [
        'withStatistics' => 'withStatistics',
        'withVpcInfo'    => 'withVpcInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->withStatistics) {
            $res['withStatistics'] = $this->withStatistics;
        }
        if (null !== $this->withVpcInfo) {
            $res['withVpcInfo'] = $this->withVpcInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEnvironmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['withStatistics'])) {
            $model->withStatistics = $map['withStatistics'];
        }
        if (isset($map['withVpcInfo'])) {
            $model->withVpcInfo = $map['withVpcInfo'];
        }

        return $model;
    }
}
