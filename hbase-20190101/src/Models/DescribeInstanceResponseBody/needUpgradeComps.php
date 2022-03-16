<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class needUpgradeComps extends Model
{
    /**
     * @var string[]
     */
    public $comps;
    protected $_name = [
        'comps' => 'Comps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comps) {
            $res['Comps'] = $this->comps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return needUpgradeComps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comps'])) {
            if (!empty($map['Comps'])) {
                $model->comps = $map['Comps'];
            }
        }

        return $model;
    }
}
