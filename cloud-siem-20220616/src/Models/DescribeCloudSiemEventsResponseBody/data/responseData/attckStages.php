<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCloudSiemEventsResponseBody\data\responseData;

use AlibabaCloud\Dara\Model;

class attckStages extends Model
{
    /**
     * @var int
     */
    public $alertNum;

    /**
     * @var string
     */
    public $tacticId;

    /**
     * @var string
     */
    public $tacticName;
    protected $_name = [
        'alertNum' => 'AlertNum',
        'tacticId' => 'TacticId',
        'tacticName' => 'TacticName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertNum) {
            $res['AlertNum'] = $this->alertNum;
        }

        if (null !== $this->tacticId) {
            $res['TacticId'] = $this->tacticId;
        }

        if (null !== $this->tacticName) {
            $res['TacticName'] = $this->tacticName;
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
        if (isset($map['AlertNum'])) {
            $model->alertNum = $map['AlertNum'];
        }

        if (isset($map['TacticId'])) {
            $model->tacticId = $map['TacticId'];
        }

        if (isset($map['TacticName'])) {
            $model->tacticName = $map['TacticName'];
        }

        return $model;
    }
}
