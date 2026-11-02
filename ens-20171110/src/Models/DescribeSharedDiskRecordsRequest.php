<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeSharedDiskRecordsRequest extends Model
{
    /**
     * @var string[]
     */
    public $diskIds;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $namespaces;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $regionIds;

    /**
     * @var string[]
     */
    public $sdgIds;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'diskIds' => 'DiskIds',
        'endTime' => 'EndTime',
        'namespaces' => 'Namespaces',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionIds' => 'RegionIds',
        'sdgIds' => 'SdgIds',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->diskIds)) {
            Model::validateArray($this->diskIds);
        }
        if (\is_array($this->namespaces)) {
            Model::validateArray($this->namespaces);
        }
        if (\is_array($this->regionIds)) {
            Model::validateArray($this->regionIds);
        }
        if (\is_array($this->sdgIds)) {
            Model::validateArray($this->sdgIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskIds) {
            if (\is_array($this->diskIds)) {
                $res['DiskIds'] = [];
                $n1 = 0;
                foreach ($this->diskIds as $item1) {
                    $res['DiskIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->namespaces) {
            if (\is_array($this->namespaces)) {
                $res['Namespaces'] = [];
                $n1 = 0;
                foreach ($this->namespaces as $item1) {
                    $res['Namespaces'][$n1] = $item1;
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

        if (null !== $this->regionIds) {
            if (\is_array($this->regionIds)) {
                $res['RegionIds'] = [];
                $n1 = 0;
                foreach ($this->regionIds as $item1) {
                    $res['RegionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sdgIds) {
            if (\is_array($this->sdgIds)) {
                $res['SdgIds'] = [];
                $n1 = 0;
                foreach ($this->sdgIds as $item1) {
                    $res['SdgIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['DiskIds'])) {
            if (!empty($map['DiskIds'])) {
                $model->diskIds = [];
                $n1 = 0;
                foreach ($map['DiskIds'] as $item1) {
                    $model->diskIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Namespaces'])) {
            if (!empty($map['Namespaces'])) {
                $model->namespaces = [];
                $n1 = 0;
                foreach ($map['Namespaces'] as $item1) {
                    $model->namespaces[$n1] = $item1;
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

        if (isset($map['RegionIds'])) {
            if (!empty($map['RegionIds'])) {
                $model->regionIds = [];
                $n1 = 0;
                foreach ($map['RegionIds'] as $item1) {
                    $model->regionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SdgIds'])) {
            if (!empty($map['SdgIds'])) {
                $model->sdgIds = [];
                $n1 = 0;
                foreach ($map['SdgIds'] as $item1) {
                    $model->sdgIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
