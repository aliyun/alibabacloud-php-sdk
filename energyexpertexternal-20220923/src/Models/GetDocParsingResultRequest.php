<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class GetDocParsingResultRequest extends Model
{
    /**
     * @var string
     */
    public $returnFormat;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'returnFormat' => 'returnFormat',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->returnFormat) {
            $res['returnFormat'] = $this->returnFormat;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['returnFormat'])) {
            $model->returnFormat = $map['returnFormat'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
