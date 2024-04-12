<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostGroupResponseBody;

use AlibabaCloud\Tea\Model;

class hostGroup extends Model
{
    /**
     * @description The description of the host group.
     *
     * @example Description
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the host group.
     *
     * @example 1
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @description The name of the host group.
     *
     * @example Host group 1
     *
     * @var string
     */
    public $hostGroupName;
    protected $_name = [
        'comment'       => 'Comment',
        'hostGroupId'   => 'HostGroupId',
        'hostGroupName' => 'HostGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->hostGroupName) {
            $res['HostGroupName'] = $this->hostGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['HostGroupName'])) {
            $model->hostGroupName = $map['HostGroupName'];
        }

        return $model;
    }
}
