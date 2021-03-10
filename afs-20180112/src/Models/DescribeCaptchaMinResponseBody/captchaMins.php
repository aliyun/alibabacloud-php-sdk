<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models\DescribeCaptchaMinResponseBody;

use AlibabaCloud\Tea\Model;

class captchaMins extends Model
{
    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $pass;

    /**
     * @var string
     */
    public $interception;
    protected $_name = [
        'time'         => 'Time',
        'pass'         => 'Pass',
        'interception' => 'Interception',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->pass) {
            $res['Pass'] = $this->pass;
        }
        if (null !== $this->interception) {
            $res['Interception'] = $this->interception;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return captchaMins
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Pass'])) {
            $model->pass = $map['Pass'];
        }
        if (isset($map['Interception'])) {
            $model->interception = $map['Interception'];
        }

        return $model;
    }
}
