<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateRuleRequest;

use AlibabaCloud\Tea\Model;

class hostGroups extends Model
{
    /**
     * @description An array that consists of asset account names.
     *
     * @var string[]
     */
    public $hostAccountNames;

    /**
     * @description The asset group ID.
     *
     * @example [{"HostGroupId":"1"}]
     *
     * @var string
     */
    public $hostGroupId;
    protected $_name = [
        'hostAccountNames' => 'HostAccountNames',
        'hostGroupId' => 'HostGroupId',
    ];

    public function validate() {}

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
