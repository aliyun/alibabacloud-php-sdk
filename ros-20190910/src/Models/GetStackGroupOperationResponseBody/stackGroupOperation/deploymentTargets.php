<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponseBody\stackGroupOperation;

use AlibabaCloud\Dara\Model;

class deploymentTargets extends Model
{
    /**
     * @var string[]
     */
    public $accountIds;

    /**
     * @var string[]
     */
    public $rdFolderIds;
    protected $_name = [
        'accountIds' => 'AccountIds',
        'rdFolderIds' => 'RdFolderIds',
    ];

    public function validate()
    {
        if (\is_array($this->accountIds)) {
            Model::validateArray($this->accountIds);
        }
        if (\is_array($this->rdFolderIds)) {
            Model::validateArray($this->rdFolderIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountIds) {
            if (\is_array($this->accountIds)) {
                $res['AccountIds'] = [];
                $n1 = 0;
                foreach ($this->accountIds as $item1) {
                    $res['AccountIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rdFolderIds) {
            if (\is_array($this->rdFolderIds)) {
                $res['RdFolderIds'] = [];
                $n1 = 0;
                foreach ($this->rdFolderIds as $item1) {
                    $res['RdFolderIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = [];
                $n1 = 0;
                foreach ($map['AccountIds'] as $item1) {
                    $model->accountIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RdFolderIds'])) {
            if (!empty($map['RdFolderIds'])) {
                $model->rdFolderIds = [];
                $n1 = 0;
                foreach ($map['RdFolderIds'] as $item1) {
                    $model->rdFolderIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
