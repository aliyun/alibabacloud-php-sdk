<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageRequest;

use AlibabaCloud\Dara\Model;

class configuration extends Model
{
    /**
     * @var string[]
     */
    public $acceptedOutputModes;

    /**
     * @var int
     */
    public $historyLength;

    /**
     * @var bool
     */
    public $returnImmediately;
    protected $_name = [
        'acceptedOutputModes' => 'AcceptedOutputModes',
        'historyLength' => 'HistoryLength',
        'returnImmediately' => 'ReturnImmediately',
    ];

    public function validate()
    {
        if (\is_array($this->acceptedOutputModes)) {
            Model::validateArray($this->acceptedOutputModes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptedOutputModes) {
            if (\is_array($this->acceptedOutputModes)) {
                $res['AcceptedOutputModes'] = [];
                $n1 = 0;
                foreach ($this->acceptedOutputModes as $item1) {
                    $res['AcceptedOutputModes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->historyLength) {
            $res['HistoryLength'] = $this->historyLength;
        }

        if (null !== $this->returnImmediately) {
            $res['ReturnImmediately'] = $this->returnImmediately;
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
        if (isset($map['AcceptedOutputModes'])) {
            if (!empty($map['AcceptedOutputModes'])) {
                $model->acceptedOutputModes = [];
                $n1 = 0;
                foreach ($map['AcceptedOutputModes'] as $item1) {
                    $model->acceptedOutputModes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HistoryLength'])) {
            $model->historyLength = $map['HistoryLength'];
        }

        if (isset($map['ReturnImmediately'])) {
            $model->returnImmediately = $map['ReturnImmediately'];
        }

        return $model;
    }
}
