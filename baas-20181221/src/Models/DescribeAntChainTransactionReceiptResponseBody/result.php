<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionReceiptResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example data
     *
     * @var string
     */
    public $data;

    /**
     * @example 20000
     *
     * @var string
     */
    public $gasUsed;

    /**
     * @var string[]
     */
    public $logs;

    /**
     * @example 0
     *
     * @var int
     */
    public $result;
    protected $_name = [
        'data'    => 'Data',
        'gasUsed' => 'GasUsed',
        'logs'    => 'Logs',
        'result'  => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->gasUsed) {
            $res['GasUsed'] = $this->gasUsed;
        }
        if (null !== $this->logs) {
            $res['Logs'] = $this->logs;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['GasUsed'])) {
            $model->gasUsed = $map['GasUsed'];
        }
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = $map['Logs'];
            }
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
