<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMTSStatisResponseBody\MTSStatisBySpecList\MTSStatisBySpec\MTSStatisDOList;

use AlibabaCloud\Dara\Model;

class MTSStatisDO extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var string
     */
    public $statTime;

    /**
     * @var string
     */
    public $statTimeUTC;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'duration' => 'Duration',
        'specification' => 'Specification',
        'statTime' => 'StatTime',
        'statTimeUTC' => 'StatTimeUTC',
        'userId' => 'UserId',
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

        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }

        if (null !== $this->statTime) {
            $res['StatTime'] = $this->statTime;
        }

        if (null !== $this->statTimeUTC) {
            $res['StatTimeUTC'] = $this->statTimeUTC;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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

        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }

        if (isset($map['StatTime'])) {
            $model->statTime = $map['StatTime'];
        }

        if (isset($map['StatTimeUTC'])) {
            $model->statTimeUTC = $map['StatTimeUTC'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
