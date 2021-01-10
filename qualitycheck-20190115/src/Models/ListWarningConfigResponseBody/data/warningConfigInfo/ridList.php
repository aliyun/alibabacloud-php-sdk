<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListWarningConfigResponseBody\data\warningConfigInfo;

use AlibabaCloud\Tea\Model;

class ridList extends Model
{
    /**
     * @var string[]
     */
    public $ridList;
    protected $_name = [
        'ridList' => 'RidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ridList) {
            $res['RidList'] = $this->ridList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ridList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RidList'])) {
            if (!empty($map['RidList'])) {
                $model->ridList = $map['RidList'];
            }
        }

        return $model;
    }
}
