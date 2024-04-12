<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetRuleResponseBody\rule;

use AlibabaCloud\Tea\Model;

class hostGroups extends Model
{
    /**
     * @var string[]
     */
    public $hostAccountNames;

    /**
     * @example 7
     *
     * @var string
     */
    public $hostGroupId;
    protected $_name = [
        'hostAccountNames' => 'HostAccountNames',
        'hostGroupId'      => 'HostGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAccountNames) {
            $res['HostAccountNames'] = $this->hostAccountNames;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostAccountNames'])) {
            if (!empty($map['HostAccountNames'])) {
                $model->hostAccountNames = $map['HostAccountNames'];
            }
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }

        return $model;
    }
}
