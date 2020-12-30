<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\HighlightGameVideoResponseBody\data;

use AlibabaCloud\Tea\Model;

class gameList extends Model
{
    /**
     * @var mixed[]
     */
    public $gameInfo;

    /**
     * @var float
     */
    public $start;

    /**
     * @var float
     */
    public $end;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'gameInfo' => 'GameInfo',
        'start'    => 'Start',
        'end'      => 'End',
        'id'       => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gameInfo) {
            $res['GameInfo'] = $this->gameInfo;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameInfo'])) {
            $model->gameInfo = $map['GameInfo'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
