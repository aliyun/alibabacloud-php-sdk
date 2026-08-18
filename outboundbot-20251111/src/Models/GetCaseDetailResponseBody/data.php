<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetCaseDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetCaseDetailResponseBody\data\callDetailRecords;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\GetCaseDetailResponseBody\data\case_;

class data extends Model
{
    /**
     * @var callDetailRecords[]
     */
    public $callDetailRecords;

    /**
     * @var case_
     */
    public $case;
    protected $_name = [
        'callDetailRecords' => 'CallDetailRecords',
        'case' => 'Case',
    ];

    public function validate()
    {
        if (\is_array($this->callDetailRecords)) {
            Model::validateArray($this->callDetailRecords);
        }
        if (null !== $this->case) {
            $this->case->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callDetailRecords) {
            if (\is_array($this->callDetailRecords)) {
                $res['CallDetailRecords'] = [];
                $n1 = 0;
                foreach ($this->callDetailRecords as $item1) {
                    $res['CallDetailRecords'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->case) {
            $res['Case'] = null !== $this->case ? $this->case->toArray($noStream) : $this->case;
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
        if (isset($map['CallDetailRecords'])) {
            if (!empty($map['CallDetailRecords'])) {
                $model->callDetailRecords = [];
                $n1 = 0;
                foreach ($map['CallDetailRecords'] as $item1) {
                    $model->callDetailRecords[$n1] = callDetailRecords::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Case'])) {
            $model->case = case_::fromMap($map['Case']);
        }

        return $model;
    }
}
