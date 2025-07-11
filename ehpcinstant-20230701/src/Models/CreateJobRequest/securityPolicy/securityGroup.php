<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\securityPolicy;

use AlibabaCloud\Tea\Model;

class securityGroup extends Model
{
    /**
     * @var string[]
     */
    public $securityGroupIds;
    protected $_name = [
        'securityGroupIds' => 'SecurityGroupIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }

        return $model;
    }
}
