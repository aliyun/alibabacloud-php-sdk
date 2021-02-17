<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicListResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicListResponseBody\data\publishInfoDo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var publishInfoDo[]
     */
    public $publishInfoDo;
    protected $_name = [
        'publishInfoDo' => 'PublishInfoDo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publishInfoDo) {
            $res['PublishInfoDo'] = [];
            if (null !== $this->publishInfoDo && \is_array($this->publishInfoDo)) {
                $n = 0;
                foreach ($this->publishInfoDo as $item) {
                    $res['PublishInfoDo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PublishInfoDo'])) {
            if (!empty($map['PublishInfoDo'])) {
                $model->publishInfoDo = [];
                $n                    = 0;
                foreach ($map['PublishInfoDo'] as $item) {
                    $model->publishInfoDo[$n++] = null !== $item ? publishInfoDo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
