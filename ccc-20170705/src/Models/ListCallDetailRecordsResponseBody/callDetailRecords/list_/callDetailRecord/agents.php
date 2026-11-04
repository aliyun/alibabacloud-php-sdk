<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallDetailRecordsResponseBody\callDetailRecords\list_\callDetailRecord;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallDetailRecordsResponseBody\callDetailRecords\list_\callDetailRecord\agents\callDetailAgent;

class agents extends Model
{
    /**
     * @var callDetailAgent[]
     */
    public $callDetailAgent;
    protected $_name = [
        'callDetailAgent' => 'CallDetailAgent',
    ];

    public function validate()
    {
        if (\is_array($this->callDetailAgent)) {
            Model::validateArray($this->callDetailAgent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callDetailAgent) {
            if (\is_array($this->callDetailAgent)) {
                $res['CallDetailAgent'] = [];
                $n1 = 0;
                foreach ($this->callDetailAgent as $item1) {
                    $res['CallDetailAgent'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CallDetailAgent'])) {
            if (!empty($map['CallDetailAgent'])) {
                $model->callDetailAgent = [];
                $n1 = 0;
                foreach ($map['CallDetailAgent'] as $item1) {
                    $model->callDetailAgent[$n1] = callDetailAgent::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
