<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\recordConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\recordConfig\recordFormat\recordFormat;

class recordFormat extends Model
{
    /**
     * @var recordFormat[]
     */
    public $recordFormat;
    protected $_name = [
        'recordFormat' => 'RecordFormat',
    ];

    public function validate()
    {
        if (\is_array($this->recordFormat)) {
            Model::validateArray($this->recordFormat);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordFormat) {
            if (\is_array($this->recordFormat)) {
                $res['RecordFormat'] = [];
                $n1 = 0;
                foreach ($this->recordFormat as $item1) {
                    $res['RecordFormat'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RecordFormat'])) {
            if (!empty($map['RecordFormat'])) {
                $model->recordFormat = [];
                $n1 = 0;
                foreach ($map['RecordFormat'] as $item1) {
                    $model->recordFormat[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
