<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCdnLinkageRulesResponseBody\schedulerRules\cdnLinkageRule\param;

use AlibabaCloud\Dara\Model;

class paramData extends Model
{
    /**
     * @var int
     */
    public $accessQps;

    /**
     * @var int
     */
    public $upstreamQps;
    protected $_name = [
        'accessQps' => 'AccessQps',
        'upstreamQps' => 'UpstreamQps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessQps) {
            $res['AccessQps'] = $this->accessQps;
        }

        if (null !== $this->upstreamQps) {
            $res['UpstreamQps'] = $this->upstreamQps;
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
        if (isset($map['AccessQps'])) {
            $model->accessQps = $map['AccessQps'];
        }

        if (isset($map['UpstreamQps'])) {
            $model->upstreamQps = $map['UpstreamQps'];
        }

        return $model;
    }
}
