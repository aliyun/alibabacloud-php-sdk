<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\IgnoreCheckItemsRequest\checkAndRiskTypeList;
use AlibabaCloud\SDK\Sas\V20181203\Models\IgnoreCheckItemsRequest\containerItems;

class IgnoreCheckItemsRequest extends Model
{
    /**
     * @var checkAndRiskTypeList[]
     */
    public $checkAndRiskTypeList;

    /**
     * @var int[]
     */
    public $checkIds;

    /**
     * @var containerItems[]
     */
    public $containerItems;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'checkAndRiskTypeList' => 'CheckAndRiskTypeList',
        'checkIds' => 'CheckIds',
        'containerItems' => 'ContainerItems',
        'lang' => 'Lang',
        'reason' => 'Reason',
        'source' => 'Source',
        'type' => 'Type',
        'uuidList' => 'UuidList',
    ];

    public function validate()
    {
        if (\is_array($this->checkAndRiskTypeList)) {
            Model::validateArray($this->checkAndRiskTypeList);
        }
        if (\is_array($this->checkIds)) {
            Model::validateArray($this->checkIds);
        }
        if (\is_array($this->containerItems)) {
            Model::validateArray($this->containerItems);
        }
        if (\is_array($this->uuidList)) {
            Model::validateArray($this->uuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkAndRiskTypeList) {
            if (\is_array($this->checkAndRiskTypeList)) {
                $res['CheckAndRiskTypeList'] = [];
                $n1 = 0;
                foreach ($this->checkAndRiskTypeList as $item1) {
                    $res['CheckAndRiskTypeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->checkIds) {
            if (\is_array($this->checkIds)) {
                $res['CheckIds'] = [];
                $n1 = 0;
                foreach ($this->checkIds as $item1) {
                    $res['CheckIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->containerItems) {
            if (\is_array($this->containerItems)) {
                $res['ContainerItems'] = [];
                $n1 = 0;
                foreach ($this->containerItems as $item1) {
                    $res['ContainerItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uuidList) {
            if (\is_array($this->uuidList)) {
                $res['UuidList'] = [];
                $n1 = 0;
                foreach ($this->uuidList as $item1) {
                    $res['UuidList'][$n1] = $item1;
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
        if (isset($map['CheckAndRiskTypeList'])) {
            if (!empty($map['CheckAndRiskTypeList'])) {
                $model->checkAndRiskTypeList = [];
                $n1 = 0;
                foreach ($map['CheckAndRiskTypeList'] as $item1) {
                    $model->checkAndRiskTypeList[$n1] = checkAndRiskTypeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CheckIds'])) {
            if (!empty($map['CheckIds'])) {
                $model->checkIds = [];
                $n1 = 0;
                foreach ($map['CheckIds'] as $item1) {
                    $model->checkIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ContainerItems'])) {
            if (!empty($map['ContainerItems'])) {
                $model->containerItems = [];
                $n1 = 0;
                foreach ($map['ContainerItems'] as $item1) {
                    $model->containerItems[$n1] = containerItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = [];
                $n1 = 0;
                foreach ($map['UuidList'] as $item1) {
                    $model->uuidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
