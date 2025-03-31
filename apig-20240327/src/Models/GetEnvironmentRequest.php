<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class GetEnvironmentRequest extends Model
{
    /**
     * @var bool
     */
    public $withStatistics;

    /**
     * @var bool
     */
    public $withVpcInfo;
    protected $_name = [
        'withStatistics' => 'withStatistics',
        'withVpcInfo' => 'withVpcInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
