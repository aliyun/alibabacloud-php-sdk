<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConditionBasicInfo\checkRange;

use AlibabaCloud\Dara\Model;

class anchor extends Model
{
    /**
     * @var string
     */
    public $cid;

    /**
     * @var int
     */
    public $hitTime;

    /**
     * @var string
     */
    public $location;
    protected $_name = [
        'cid' => 'Cid',
        'hitTime' => 'Hit_time',
        'location' => 'Location',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cid) {
            $res['Cid'] = $this->cid;
        }

        if (null !== $this->hitTime) {
            $res['Hit_time'] = $this->hitTime;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
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
        if (isset($map['Cid'])) {
            $model->cid = $map['Cid'];
        }

        if (isset($map['Hit_time'])) {
            $model->hitTime = $map['Hit_time'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
