<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class FunctionRestriction extends Model
{
    /**
     * @var bool
     */
    public $disable;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'disable' => 'disable',
        'lastModifiedTime' => 'lastModifiedTime',
        'reason' => 'reason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disable) {
            $res['disable'] = $this->disable;
        }

        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
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
        if (isset($map['disable'])) {
            $model->disable = $map['disable'];
        }

        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }

        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        return $model;
    }
}
