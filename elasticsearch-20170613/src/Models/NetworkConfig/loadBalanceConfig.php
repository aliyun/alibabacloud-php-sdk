<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\NetworkConfig;

use AlibabaCloud\Dara\Model;

class loadBalanceConfig extends Model
{
    /**
     * @var string
     */
    public $vsArea;

    /**
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'vsArea' => 'vsArea',
        'vswitchId' => 'vswitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vsArea) {
            $res['vsArea'] = $this->vsArea;
        }

        if (null !== $this->vswitchId) {
            $res['vswitchId'] = $this->vswitchId;
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
        if (isset($map['vsArea'])) {
            $model->vsArea = $map['vsArea'];
        }

        if (isset($map['vswitchId'])) {
            $model->vswitchId = $map['vswitchId'];
        }

        return $model;
    }
}
