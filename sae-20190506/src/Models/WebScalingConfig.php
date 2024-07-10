<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class WebScalingConfig extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $maximumInstanceCount;

    /**
     * @var int
     */
    public $minimumInstanceCount;
    protected $_name = [
        'maximumInstanceCount' => 'MaximumInstanceCount',
        'minimumInstanceCount' => 'MinimumInstanceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maximumInstanceCount) {
            $res['MaximumInstanceCount'] = $this->maximumInstanceCount;
        }
        if (null !== $this->minimumInstanceCount) {
            $res['MinimumInstanceCount'] = $this->minimumInstanceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WebScalingConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaximumInstanceCount'])) {
            $model->maximumInstanceCount = $map['MaximumInstanceCount'];
        }
        if (isset($map['MinimumInstanceCount'])) {
            $model->minimumInstanceCount = $map['MinimumInstanceCount'];
        }

        return $model;
    }
}
