<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListProhibitedSoftwareShrinkRequest\softwareIds;

class ListProhibitedSoftwareShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $processName;

    /**
     * @var softwareIds[]
     */
    public $softwareIds;

    /**
     * @var string
     */
    public $tagIdShrink;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'deviceType' => 'DeviceType',
        'name' => 'Name',
        'pageSize' => 'PageSize',
        'policyId' => 'PolicyId',
        'processName' => 'ProcessName',
        'softwareIds' => 'SoftwareIds',
        'tagIdShrink' => 'TagId',
    ];

    public function validate()
    {
        if (\is_array($this->softwareIds)) {
            Model::validateArray($this->softwareIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }

        if (null !== $this->softwareIds) {
            if (\is_array($this->softwareIds)) {
                $res['SoftwareIds'] = [];
                $n1 = 0;
                foreach ($this->softwareIds as $item1) {
                    $res['SoftwareIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tagIdShrink) {
            $res['TagId'] = $this->tagIdShrink;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }

        if (isset($map['SoftwareIds'])) {
            if (!empty($map['SoftwareIds'])) {
                $model->softwareIds = [];
                $n1 = 0;
                foreach ($map['SoftwareIds'] as $item1) {
                    $model->softwareIds[$n1] = softwareIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TagId'])) {
            $model->tagIdShrink = $map['TagId'];
        }

        return $model;
    }
}
