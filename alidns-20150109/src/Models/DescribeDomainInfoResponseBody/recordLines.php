<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponseBody\recordLines\recordLine;

class recordLines extends Model
{
    /**
     * @var recordLine[]
     */
    public $recordLine;
    protected $_name = [
        'recordLine' => 'RecordLine',
    ];

    public function validate()
    {
        if (\is_array($this->recordLine)) {
            Model::validateArray($this->recordLine);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordLine) {
            if (\is_array($this->recordLine)) {
                $res['RecordLine'] = [];
                $n1 = 0;
                foreach ($this->recordLine as $item1) {
                    $res['RecordLine'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RecordLine'])) {
            if (!empty($map['RecordLine'])) {
                $model->recordLine = [];
                $n1 = 0;
                foreach ($map['RecordLine'] as $item1) {
                    $model->recordLine[$n1++] = recordLine::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
