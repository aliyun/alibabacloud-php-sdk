<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModelingProjectDetailResponseBody\resultObject;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safconsole\V20250521\Models\DescribeModelingProjectDetailResponseBody\resultObject\syncedFiles\files;

class syncedFiles extends Model
{
    /**
     * @var bool
     */
    public $deployable;

    /**
     * @var files[]
     */
    public $files;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $syncedTime;
    protected $_name = [
        'deployable' => 'Deployable',
        'files' => 'Files',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'syncedTime' => 'SyncedTime',
    ];

    public function validate()
    {
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployable) {
            $res['Deployable'] = $this->deployable;
        }

        if (null !== $this->files) {
            if (\is_array($this->files)) {
                $res['Files'] = [];
                $n1 = 0;
                foreach ($this->files as $item1) {
                    $res['Files'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->syncedTime) {
            $res['SyncedTime'] = $this->syncedTime;
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
        if (isset($map['Deployable'])) {
            $model->deployable = $map['Deployable'];
        }

        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n1 = 0;
                foreach ($map['Files'] as $item1) {
                    $model->files[$n1] = files::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['SyncedTime'])) {
            $model->syncedTime = $map['SyncedTime'];
        }

        return $model;
    }
}
