<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DescribeDifyEditionsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $community;

    /**
     * @var string[]
     */
    public $enterprise;
    protected $_name = [
        'community' => 'Community',
        'enterprise' => 'Enterprise',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->community) {
            $res['Community'] = $this->community;
        }
        if (null !== $this->enterprise) {
            $res['Enterprise'] = $this->enterprise;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Community'])) {
            if (!empty($map['Community'])) {
                $model->community = $map['Community'];
            }
        }
        if (isset($map['Enterprise'])) {
            if (!empty($map['Enterprise'])) {
                $model->enterprise = $map['Enterprise'];
            }
        }

        return $model;
    }
}
