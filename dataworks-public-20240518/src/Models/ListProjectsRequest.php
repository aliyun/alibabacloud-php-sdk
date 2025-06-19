<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProjectsRequest\aliyunResourceTags;

class ListProjectsRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunResourceGroupId;

    /**
     * @var aliyunResourceTags[]
     */
    public $aliyunResourceTags;

    /**
     * @var bool
     */
    public $devEnvironmentEnabled;

    /**
     * @var bool
     */
    public $devRoleDisabled;

    /**
     * @var int[]
     */
    public $ids;

    /**
     * @var string[]
     */
    public $names;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $paiTaskEnabled;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aliyunResourceGroupId' => 'AliyunResourceGroupId',
        'aliyunResourceTags' => 'AliyunResourceTags',
        'devEnvironmentEnabled' => 'DevEnvironmentEnabled',
        'devRoleDisabled' => 'DevRoleDisabled',
        'ids' => 'Ids',
        'names' => 'Names',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'paiTaskEnabled' => 'PaiTaskEnabled',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->aliyunResourceTags)) {
            Model::validateArray($this->aliyunResourceTags);
        }
        if (\is_array($this->ids)) {
            Model::validateArray($this->ids);
        }
        if (\is_array($this->names)) {
            Model::validateArray($this->names);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunResourceGroupId) {
            $res['AliyunResourceGroupId'] = $this->aliyunResourceGroupId;
        }

        if (null !== $this->aliyunResourceTags) {
            if (\is_array($this->aliyunResourceTags)) {
                $res['AliyunResourceTags'] = [];
                $n1 = 0;
                foreach ($this->aliyunResourceTags as $item1) {
                    $res['AliyunResourceTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->devEnvironmentEnabled) {
            $res['DevEnvironmentEnabled'] = $this->devEnvironmentEnabled;
        }

        if (null !== $this->devRoleDisabled) {
            $res['DevRoleDisabled'] = $this->devRoleDisabled;
        }

        if (null !== $this->ids) {
            if (\is_array($this->ids)) {
                $res['Ids'] = [];
                $n1 = 0;
                foreach ($this->ids as $item1) {
                    $res['Ids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->names) {
            if (\is_array($this->names)) {
                $res['Names'] = [];
                $n1 = 0;
                foreach ($this->names as $item1) {
                    $res['Names'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->paiTaskEnabled) {
            $res['PaiTaskEnabled'] = $this->paiTaskEnabled;
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
        if (isset($map['AliyunResourceGroupId'])) {
            $model->aliyunResourceGroupId = $map['AliyunResourceGroupId'];
        }

        if (isset($map['AliyunResourceTags'])) {
            if (!empty($map['AliyunResourceTags'])) {
                $model->aliyunResourceTags = [];
                $n1 = 0;
                foreach ($map['AliyunResourceTags'] as $item1) {
                    $model->aliyunResourceTags[$n1] = aliyunResourceTags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DevEnvironmentEnabled'])) {
            $model->devEnvironmentEnabled = $map['DevEnvironmentEnabled'];
        }

        if (isset($map['DevRoleDisabled'])) {
            $model->devRoleDisabled = $map['DevRoleDisabled'];
        }

        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = [];
                $n1 = 0;
                foreach ($map['Ids'] as $item1) {
                    $model->ids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Names'])) {
            if (!empty($map['Names'])) {
                $model->names = [];
                $n1 = 0;
                foreach ($map['Names'] as $item1) {
                    $model->names[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PaiTaskEnabled'])) {
            $model->paiTaskEnabled = $map['PaiTaskEnabled'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
