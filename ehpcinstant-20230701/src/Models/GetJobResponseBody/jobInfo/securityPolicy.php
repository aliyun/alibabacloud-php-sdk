<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\securityPolicy\securityGroup;

class securityPolicy extends Model
{
    /**
     * @var securityGroup
     */
    public $securityGroup;
    protected $_name = [
        'securityGroup' => 'SecurityGroup',
    ];

    public function validate()
    {
        if (null !== $this->securityGroup) {
            $this->securityGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = null !== $this->securityGroup ? $this->securityGroup->toArray($noStream) : $this->securityGroup;
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
        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = securityGroup::fromMap($map['SecurityGroup']);
        }

        return $model;
    }
}
