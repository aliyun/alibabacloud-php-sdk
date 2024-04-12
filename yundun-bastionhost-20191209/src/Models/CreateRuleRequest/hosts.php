<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\CreateRuleRequest;

use AlibabaCloud\Tea\Model;

class hosts extends Model
{
    /**
     * @var string[]
     */
    public $hostAccountIds;

    /**
     * @example [{"HostId":"1"}]
     *
     * @var string
     */
    public $hostId;
    protected $_name = [
        'hostAccountIds' => 'HostAccountIds',
        'hostId'         => 'HostId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAccountIds) {
            $res['HostAccountIds'] = $this->hostAccountIds;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hosts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostAccountIds'])) {
            if (!empty($map['HostAccountIds'])) {
                $model->hostAccountIds = $map['HostAccountIds'];
            }
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }

        return $model;
    }
}
