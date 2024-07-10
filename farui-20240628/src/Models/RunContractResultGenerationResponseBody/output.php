<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationResponseBody;

use AlibabaCloud\SDK\FaRui\V20240628\Models\RunContractResultGenerationResponseBody\output\result;
use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @var result
     */
    public $result;

    /**
     * @example eaa56e1e-e205-4f5e-926e-5e2269ae7f68
     *
     * @var string
     */
    public $resultTaskId;
    protected $_name = [
        'result'       => 'result',
        'resultTaskId' => 'resultTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->resultTaskId) {
            $res['resultTaskId'] = $this->resultTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return output
     */
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
