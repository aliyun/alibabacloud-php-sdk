<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCloudDiskAvailableResourceInfoResponseBody\supportResources\supportResource;

use AlibabaCloud\Tea\Model;

class ability extends Model
{
    /**
     * @var string[]
     */
    public $ability;
    protected $_name = [
        'ability' => 'Ability',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ability) {
            $res['Ability'] = $this->ability;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ability
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ability'])) {
            if (!empty($map['Ability'])) {
                $model->ability = $map['Ability'];
            }
        }

        return $model;
    }
}
