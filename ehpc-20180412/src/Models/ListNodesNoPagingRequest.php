<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ListNodesNoPagingRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var bool
     */
    public $onlyDetached;

    /**
     * @var string
     */
    public $sequence;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'role'         => 'Role',
        'hostName'     => 'HostName',
        'onlyDetached' => 'OnlyDetached',
        'sequence'     => 'Sequence',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->onlyDetached) {
            $res['OnlyDetached'] = $this->onlyDetached;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNodesNoPagingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['OnlyDetached'])) {
            $model->onlyDetached = $map['OnlyDetached'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        return $model;
    }
}
