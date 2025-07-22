<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyCallbackMetaRequest;

use AlibabaCloud\Tea\Model;

class callback extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example RecordEvent
     *
     * @var string
     */
    public $category;

    /**
     * @description This parameter is required.
     *
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $conf;

    /**
     * @var int[]
     */
    public $subEvent;
    protected $_name = [
        'category' => 'Category',
        'conf' => 'Conf',
        'subEvent' => 'SubEvent',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->conf) {
            $res['Conf'] = $this->conf;
        }
        if (null !== $this->subEvent) {
            $res['SubEvent'] = $this->subEvent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Conf'])) {
            $model->conf = $map['Conf'];
        }
        if (isset($map['SubEvent'])) {
            if (!empty($map['SubEvent'])) {
                $model->subEvent = $map['SubEvent'];
            }
        }

        return $model;
    }
}
