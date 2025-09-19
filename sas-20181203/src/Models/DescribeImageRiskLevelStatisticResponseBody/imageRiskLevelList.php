<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRiskLevelStatisticResponseBody;

use AlibabaCloud\Dara\Model;

class imageRiskLevelList extends Model
{
    /**
     * @var int
     */
    public $cnt;

    /**
     * @var string
     */
    public $imageRiskLevel;
    protected $_name = [
        'cnt' => 'Cnt',
        'imageRiskLevel' => 'ImageRiskLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cnt) {
            $res['Cnt'] = $this->cnt;
        }

        if (null !== $this->imageRiskLevel) {
            $res['ImageRiskLevel'] = $this->imageRiskLevel;
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
        if (isset($map['Cnt'])) {
            $model->cnt = $map['Cnt'];
        }

        if (isset($map['ImageRiskLevel'])) {
            $model->imageRiskLevel = $map['ImageRiskLevel'];
        }

        return $model;
    }
}
