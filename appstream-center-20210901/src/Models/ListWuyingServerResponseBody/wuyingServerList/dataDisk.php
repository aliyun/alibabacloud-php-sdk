<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListWuyingServerResponseBody\wuyingServerList;

use AlibabaCloud\Dara\Model;

class dataDisk extends Model
{
    /**
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @var string
     */
    public $dataDiskPerformanceLevel;

    /**
     * @var int
     */
    public $dataDiskSize;
    protected $_name = [
        'dataDiskCategory' => 'DataDiskCategory',
        'dataDiskPerformanceLevel' => 'DataDiskPerformanceLevel',
        'dataDiskSize' => 'DataDiskSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }

        if (null !== $this->dataDiskPerformanceLevel) {
            $res['DataDiskPerformanceLevel'] = $this->dataDiskPerformanceLevel;
        }

        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
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
        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }

        if (isset($map['DataDiskPerformanceLevel'])) {
            $model->dataDiskPerformanceLevel = $map['DataDiskPerformanceLevel'];
        }

        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        return $model;
    }
}
