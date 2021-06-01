<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByUrlResponseBody\data;

use AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByUrlResponseBody\data\auctions\result;
use AlibabaCloud\Tea\Model;

class auctions extends Model
{
    /**
     * @var result
     */
    public $result;

    /**
     * @var float
     */
    public $rankScore;
    protected $_name = [
        'result'    => 'Result',
        'rankScore' => 'RankScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->rankScore) {
            $res['RankScore'] = $this->rankScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auctions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['RankScore'])) {
            $model->rankScore = $map['RankScore'];
        }

        return $model;
    }
}
