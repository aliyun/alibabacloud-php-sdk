<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterResponseBody;

use AlibabaCloud\Dara\Model;

class clusters extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $currentVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextVersion;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'currentVersion' => 'CurrentVersion',
        'name' => 'Name',
        'nextVersion' => 'NextVersion',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nextVersion) {
            $res['NextVersion'] = $this->nextVersion;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NextVersion'])) {
            $model->nextVersion = $map['NextVersion'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
