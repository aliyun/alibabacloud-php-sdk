<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup;

use AlibabaCloud\Tea\Model;

class matchExpress extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup\matchExpress\matchExpress[]
     */
    public $matchExpress;
    protected $_name = [
        'matchExpress' => 'MatchExpress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchExpress) {
            $res['MatchExpress'] = [];
            if (null !== $this->matchExpress && \is_array($this->matchExpress)) {
                $n = 0;
                foreach ($this->matchExpress as $item) {
                    $res['MatchExpress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchExpress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MatchExpress'])) {
            if (!empty($map['MatchExpress'])) {
                $model->matchExpress = [];
                $n                   = 0;
                foreach ($map['MatchExpress'] as $item) {
                    $model->matchExpress[$n++] = null !== $item ? \AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup\matchExpress\matchExpress::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
