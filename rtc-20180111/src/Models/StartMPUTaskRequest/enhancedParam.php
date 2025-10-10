<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest;

use AlibabaCloud\Dara\Model;

class enhancedParam extends Model
{
    /**
     * @var bool
     */
    public $enablePortraitSegmentation;
    protected $_name = [
        'enablePortraitSegmentation' => 'EnablePortraitSegmentation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enablePortraitSegmentation) {
            $res['EnablePortraitSegmentation'] = $this->enablePortraitSegmentation;
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
        if (isset($map['EnablePortraitSegmentation'])) {
            $model->enablePortraitSegmentation = $map['EnablePortraitSegmentation'];
        }

        return $model;
    }
}
