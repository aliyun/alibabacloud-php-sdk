<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcTopUrlResponseBody\attackUrlDataList;

use AlibabaCloud\Tea\Model;

class attackUrlDatas extends Model
{
    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $attackCount;
    protected $_name = [
        'url'         => 'Url',
        'attackCount' => 'AttackCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->attackCount) {
            $res['AttackCount'] = $this->attackCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attackUrlDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['AttackCount'])) {
            $model->attackCount = $map['AttackCount'];
        }

        return $model;
    }
}
