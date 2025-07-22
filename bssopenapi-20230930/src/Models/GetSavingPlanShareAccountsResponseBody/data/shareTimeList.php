<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanShareAccountsResponseBody\data;

use AlibabaCloud\Tea\Model;

class shareTimeList extends Model
{
    /**
     * @var string
     */
    public $shareEndTime;

    /**
     * @var string
     */
    public $shareStartTime;
    protected $_name = [
        'shareEndTime' => 'ShareEndTime',
        'shareStartTime' => 'ShareStartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->shareEndTime) {
            $res['ShareEndTime'] = $this->shareEndTime;
        }
        if (null !== $this->shareStartTime) {
            $res['ShareStartTime'] = $this->shareStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return shareTimeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShareEndTime'])) {
            $model->shareEndTime = $map['ShareEndTime'];
        }
        if (isset($map['ShareStartTime'])) {
            $model->shareStartTime = $map['ShareStartTime'];
        }

        return $model;
    }
}
