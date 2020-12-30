<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\ClassifyVehicleInsuranceResponseBody\data;

use AlibabaCloud\Tea\Model;

class labels extends Model
{
    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'score' => 'Score',
        'name'  => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return labels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
