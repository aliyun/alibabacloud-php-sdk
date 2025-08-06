<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIStatisResponseBody;

use AlibabaCloud\Dara\Model;

class AIStatisList extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $statTime;

    /**
     * @var string
     */
    public $statTimeUTC;
    protected $_name = [
        'duration' => 'Duration',
        'statTime' => 'StatTime',
        'statTimeUTC' => 'StatTimeUTC',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->statTime) {
            $res['StatTime'] = $this->statTime;
        }

        if (null !== $this->statTimeUTC) {
            $res['StatTimeUTC'] = $this->statTimeUTC;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['StatTime'])) {
            $model->statTime = $map['StatTime'];
        }

        if (isset($map['StatTimeUTC'])) {
            $model->statTimeUTC = $map['StatTimeUTC'];
        }

        return $model;
    }
}
