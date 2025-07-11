<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\securityPolicy\securityGroup;
use AlibabaCloud\Tea\Model;

class securityPolicy extends Model
{
    /**
     * @var securityGroup
     */
    public $securityGroup;
    protected $_name = [
        'securityGroup' => 'SecurityGroup',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = null !== $this->securityGroup ? $this->securityGroup->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = securityGroup::fromMap($map['SecurityGroup']);
        }

        return $model;
    }
}
