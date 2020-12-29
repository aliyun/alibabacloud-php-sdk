<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainTransactionReceiptResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @var int
     */
    public $result;

    /**
     * @var string[]
     */
    public $logs;

    /**
     * @var string
     */
    public $gasUsed;
    protected $_name = [
        'data'    => 'Data',
        'result'  => 'Result',
        'logs'    => 'Logs',
        'gasUsed' => 'GasUsed',
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
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->logs) {
            $res['Logs'] = $this->logs;
        }
        if (null !== $this->gasUsed) {
            $res['GasUsed'] = $this->gasUsed;
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
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = $map['Logs'];
            }
        }
        if (isset($map['GasUsed'])) {
            $model->gasUsed = $map['GasUsed'];
        }

        return $model;
    }
}
