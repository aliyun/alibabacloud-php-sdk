<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\HighlightGameVideoResponseBody\data;

use AlibabaCloud\Tea\Model;

class gameList extends Model
{
    /**
     * @var float
     */
    public $end;

    /**
     * @var mixed[]
     */
    public $gameInfo;

    /**
     * @var string
     */
    public $id;

    /**
     * @var float
     */
    public $start;
    protected $_name = [
        'end'      => 'End',
        'gameInfo' => 'GameInfo',
        'id'       => 'Id',
        'start'    => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->gameInfo) {
            $res['GameInfo'] = $this->gameInfo;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
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
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['GameInfo'])) {
            $model->gameInfo = $map['GameInfo'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
