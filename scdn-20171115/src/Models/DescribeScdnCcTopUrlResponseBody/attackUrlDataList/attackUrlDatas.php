<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcTopUrlResponseBody\attackUrlDataList;

use AlibabaCloud\Tea\Model;

class attackUrlDatas extends Model
{
    /**
     * @var string
     */
    public $attackCount;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'attackCount' => 'AttackCount',
        'url'         => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackCount) {
            $res['AttackCount'] = $this->attackCount;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['AttackCount'])) {
            $model->attackCount = $map['AttackCount'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
