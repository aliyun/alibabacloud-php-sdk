<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class ExportTextScanResultRequest extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string[]
     */
    public $query;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'endDate' => 'EndDate',
        'query' => 'Query',
        'regionId' => 'RegionId',
        'startDate' => 'StartDate',
    ];

    public function validate()
    {
        if (\is_array($this->query)) {
            Model::validateArray($this->query);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->query) {
            if (\is_array($this->query)) {
                $res['Query'] = [];
                foreach ($this->query as $key1 => $value1) {
                    $res['Query'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
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
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['Query'])) {
            if (!empty($map['Query'])) {
                $model->query = [];
                foreach ($map['Query'] as $key1 => $value1) {
                    $model->query[$key1] = $value1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
