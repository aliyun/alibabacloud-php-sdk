<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByPicResponseBody\data;

use AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByPicResponseBody\data\auctions\result;
use AlibabaCloud\Tea\Model;

class auctions extends Model
{
    /**
     * @example 0.337
     *
     * @var float
     */
    public $rankScore;

    /**
     * @var result
     */
    public $result;
    protected $_name = [
        'rankScore' => 'RankScore',
        'result'    => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rankScore) {
            $res['RankScore'] = $this->rankScore;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
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
        if (isset($map['RankScore'])) {
            $model->rankScore = $map['RankScore'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        return $model;
    }
}
