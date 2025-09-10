<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListAddonReleasesResponseBody\releases;

use AlibabaCloud\Dara\Model;

class conditions extends Model
{
    /**
     * @var string
     */
    public $firstTransitionTime;

    /**
     * @var string
     */
    public $lastTransitionTime;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'firstTransitionTime' => 'firstTransitionTime',
        'lastTransitionTime' => 'lastTransitionTime',
        'message' => 'message',
        'status' => 'status',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firstTransitionTime) {
            $res['firstTransitionTime'] = $this->firstTransitionTime;
        }

        if (null !== $this->lastTransitionTime) {
            $res['lastTransitionTime'] = $this->lastTransitionTime;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['firstTransitionTime'])) {
            $model->firstTransitionTime = $map['firstTransitionTime'];
        }

        if (isset($map['lastTransitionTime'])) {
            $model->lastTransitionTime = $map['lastTransitionTime'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
