<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enablePortraitSegmentation) {
            $res['EnablePortraitSegmentation'] = $this->enablePortraitSegmentation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return enhancedParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnablePortraitSegmentation'])) {
            $model->enablePortraitSegmentation = $map['EnablePortraitSegmentation'];
        }

        return $model;
    }
}
