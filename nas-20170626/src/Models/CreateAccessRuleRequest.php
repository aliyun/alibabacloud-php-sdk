<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class CreateAccessRuleRequest extends Model
{
    /**
     * @var string
     */
    public $accessGroupName;

    /**
     * @var string
     */
    public $fileSystemType;

    /**
     * @var string
     */
    public $ipv6SourceCidrIp;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $RWAccessType;

    /**
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @var string
     */
    public $userAccessType;
    protected $_name = [
        'accessGroupName' => 'AccessGroupName',
        'fileSystemType' => 'FileSystemType',
        'ipv6SourceCidrIp' => 'Ipv6SourceCidrIp',
        'priority' => 'Priority',
        'RWAccessType' => 'RWAccessType',
        'sourceCidrIp' => 'SourceCidrIp',
        'userAccessType' => 'UserAccessType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
        }

        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }

        if (null !== $this->ipv6SourceCidrIp) {
            $res['Ipv6SourceCidrIp'] = $this->ipv6SourceCidrIp;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->RWAccessType) {
            $res['RWAccessType'] = $this->RWAccessType;
        }

        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }

        if (null !== $this->userAccessType) {
            $res['UserAccessType'] = $this->userAccessType;
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
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }

        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }

        if (isset($map['Ipv6SourceCidrIp'])) {
            $model->ipv6SourceCidrIp = $map['Ipv6SourceCidrIp'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RWAccessType'])) {
            $model->RWAccessType = $map['RWAccessType'];
        }

        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }

        if (isset($map['UserAccessType'])) {
            $model->userAccessType = $map['UserAccessType'];
        }

        return $model;
    }
}
