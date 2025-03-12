<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponseBody\haVips\haVip;

use AlibabaCloud\Tea\Model;

class associatedInstances extends Model
{
    /**
     * @var string[]
     */
    public $associatedInstance;
    protected $_name = [
        'associatedInstance' => 'associatedInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedInstance) {
            $res['associatedInstance'] = $this->associatedInstance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['associatedInstance'])) {
            if (!empty($map['associatedInstance'])) {
                $model->associatedInstance = $map['associatedInstance'];
            }
        }

        return $model;
    }
}
