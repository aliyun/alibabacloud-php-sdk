<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class WebScalingConfig extends Model
{
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
