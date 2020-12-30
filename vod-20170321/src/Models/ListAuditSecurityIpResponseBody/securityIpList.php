<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAuditSecurityIpResponseBody;

use AlibabaCloud\Tea\Model;

class securityIpList extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $securityGroupName;

    /**
     * @var string
     */
    public $ips;

    /**
     * @var string
     */
    public $modificationTime;
    protected $_name = [
        'creationTime'      => 'CreationTime',
        'securityGroupName' => 'SecurityGroupName',
        'ips'               => 'Ips',
        'modificationTime'  => 'ModificationTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityIpList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if (isset($map['Ips'])) {
            $model->ips = $map['Ips'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }

        return $model;
    }
}
