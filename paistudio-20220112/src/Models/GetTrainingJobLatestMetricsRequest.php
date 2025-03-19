<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetTrainingJobLatestMetricsRequest extends Model
{
    /**
     * @example loss
     *
     * @var string
     */
    public $names;
    protected $_name = [
        'names' => 'Names',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTrainingJobLatestMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Names'])) {
            $model->names = $map['Names'];
        }

        return $model;
    }
}
