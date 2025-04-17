<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAuditSecurityIpResponseBody;

use AlibabaCloud\Dara\Model;

class securityIpList extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $ips;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var string
     */
    public $securityGroupName;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'ips' => 'Ips',
        'modificationTime' => 'ModificationTime',
        'securityGroupName' => 'SecurityGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }

        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }

        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Ips'])) {
            $model->ips = $map['Ips'];
        }

        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }

        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }

        return $model;
    }
}
