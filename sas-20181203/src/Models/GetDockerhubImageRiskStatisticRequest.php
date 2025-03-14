<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetDockerhubImageRiskStatisticRequest extends Model
{
    /**
     * @description The types of image risks to be queried.
     *
     * @var string[]
     */
    public $types;
    protected $_name = [
        'types' => 'Types',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDockerhubImageRiskStatisticRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = $map['Types'];
            }
        }

        return $model;
    }
}
