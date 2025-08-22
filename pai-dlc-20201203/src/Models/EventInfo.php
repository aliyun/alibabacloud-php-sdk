<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class EventInfo extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $podId;

    /**
     * @var string
     */
    public $podUid;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'content' => 'Content',
        'id' => 'Id',
        'podId' => 'PodId',
        'podUid' => 'PodUid',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->podId) {
            $res['PodId'] = $this->podId;
        }

        if (null !== $this->podUid) {
            $res['PodUid'] = $this->podUid;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['PodId'])) {
            $model->podId = $map['PodId'];
        }

        if (isset($map['PodUid'])) {
            $model->podUid = $map['PodUid'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
