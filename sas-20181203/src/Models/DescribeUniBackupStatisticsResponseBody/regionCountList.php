<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUniBackupStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class regionCountList extends Model
{
    /**
     * @var string
     */
    public $automaticCount;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'automaticCount' => 'AutomaticCount',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->automaticCount) {
            $res['AutomaticCount'] = $this->automaticCount;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AutomaticCount'])) {
            $model->automaticCount = $map['AutomaticCount'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
