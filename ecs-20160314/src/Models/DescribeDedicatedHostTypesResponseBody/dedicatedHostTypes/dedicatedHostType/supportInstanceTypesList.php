<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDedicatedHostTypesResponseBody\dedicatedHostTypes\dedicatedHostType;

use AlibabaCloud\Tea\Model;

class supportInstanceTypesList extends Model
{
    /**
     * @var string[]
     */
    public $supportInstanceTypesList;
    protected $_name = [
        'supportInstanceTypesList' => 'SupportInstanceTypesList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportInstanceTypesList) {
            $res['SupportInstanceTypesList'] = $this->supportInstanceTypesList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportInstanceTypesList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportInstanceTypesList'])) {
            if (!empty($map['SupportInstanceTypesList'])) {
                $model->supportInstanceTypesList = $map['SupportInstanceTypesList'];
            }
        }

        return $model;
    }
}
