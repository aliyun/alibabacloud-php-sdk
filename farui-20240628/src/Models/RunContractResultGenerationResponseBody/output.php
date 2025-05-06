<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationResponseBody\output\result;

class output extends Model
{
    /**
     * @var result
     */
    public $result;

    /**
     * @var string
     */
    public $resultTaskId;
    protected $_name = [
        'result' => 'result',
        'resultTaskId' => 'resultTaskId',
    ];

    public function validate()
    {
        if (null !== $this->result) {
            $this->result->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toArray($noStream) : $this->result;
        }

        if (null !== $this->resultTaskId) {
            $res['resultTaskId'] = $this->resultTaskId;
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
        if (isset($map['result'])) {
            $model->result = result::fromMap($map['result']);
        }

        if (isset($map['resultTaskId'])) {
            $model->resultTaskId = $map['resultTaskId'];
        }

        return $model;
    }
}
