<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeFileSystemsResponseBody\fileSystems;

use AlibabaCloud\Dara\Model;

class mountTargets extends Model
{
    /**
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @var string
     */
    public $mountTargetName;

    /**
     * @var string
     */
    public $netWorkId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'mountTargetDomain' => 'MountTargetDomain',
        'mountTargetName' => 'MountTargetName',
        'netWorkId' => 'NetWorkId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }

        if (null !== $this->mountTargetName) {
            $res['MountTargetName'] = $this->mountTargetName;
        }

        if (null !== $this->netWorkId) {
            $res['NetWorkId'] = $this->netWorkId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }

        if (isset($map['MountTargetName'])) {
            $model->mountTargetName = $map['MountTargetName'];
        }

        if (isset($map['NetWorkId'])) {
            $model->netWorkId = $map['NetWorkId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
