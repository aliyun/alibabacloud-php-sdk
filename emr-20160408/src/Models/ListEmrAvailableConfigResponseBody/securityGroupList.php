<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\securityGroupList\securityGroup;
use AlibabaCloud\Tea\Model;

class securityGroupList extends Model
{
    /**
     * @var securityGroup[]
     */
    public $securityGroup;
    protected $_name = [
        'securityGroup' => 'SecurityGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = [];
            if (null !== $this->securityGroup && \is_array($this->securityGroup)) {
                $n = 0;
                foreach ($this->securityGroup as $item) {
                    $res['SecurityGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroup'])) {
            if (!empty($map['SecurityGroup'])) {
                $model->securityGroup = [];
                $n                    = 0;
                foreach ($map['SecurityGroup'] as $item) {
                    $model->securityGroup[$n++] = null !== $item ? securityGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
