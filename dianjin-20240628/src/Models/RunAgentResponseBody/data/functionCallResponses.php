<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentResponseBody\data;

use AlibabaCloud\Dara\Model;

class functionCallResponses extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $functionArgs;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'displayName' => 'displayName',
        'endTime' => 'endTime',
        'functionArgs' => 'functionArgs',
        'functionName' => 'functionName',
        'result' => 'result',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->functionArgs) {
            $res['functionArgs'] = $this->functionArgs;
        }

        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['functionArgs'])) {
            $model->functionArgs = $map['functionArgs'];
        }

        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
