<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class PocCreateTaskRequest extends Model
{
    /**
     * @var string
     */
    public $dateFormat;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'dateFormat' => 'DateFormat',
        'lang' => 'Lang',
        'regId' => 'RegId',
        'taskName' => 'TaskName',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dateFormat) {
            $res['DateFormat'] = $this->dateFormat;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->regId) {
            $res['RegId'] = $this->regId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['DateFormat'])) {
            $model->dateFormat = $map['DateFormat'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RegId'])) {
            $model->regId = $map['RegId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
