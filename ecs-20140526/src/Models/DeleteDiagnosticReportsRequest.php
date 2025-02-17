<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class DeleteDiagnosticReportsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string[]
     */
    public $reportIds;
    protected $_name = [
        'regionId'  => 'RegionId',
        'reportIds' => 'ReportIds',
    ];

    public function validate()
    {
        if (\is_array($this->reportIds)) {
            Model::validateArray($this->reportIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reportIds) {
            if (\is_array($this->reportIds)) {
                $res['ReportIds'] = [];
                $n1               = 0;
                foreach ($this->reportIds as $item1) {
                    $res['ReportIds'][$n1++] = $item1;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReportIds'])) {
            if (!empty($map['ReportIds'])) {
                $model->reportIds = [];
                $n1               = 0;
                foreach ($map['ReportIds'] as $item1) {
                    $model->reportIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
