<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\subscriptionSet\subscriptionData;

use AlibabaCloud\Tea\Model;

class tagsSet extends Model
{
    /**
     * @var string[]
     */
    public $tag;
    protected $_name = [
        'tag' => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagsSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = $map['Tag'];
            }
        }

        return $model;
    }
}
