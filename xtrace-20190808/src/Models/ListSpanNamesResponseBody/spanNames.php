<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\ListSpanNamesResponseBody;

use AlibabaCloud\Dara\Model;

class spanNames extends Model
{
    /**
     * @var string[]
     */
    public $spanName;
    protected $_name = [
        'spanName' => 'SpanName',
    ];

    public function validate()
    {
        if (\is_array($this->spanName)) {
            Model::validateArray($this->spanName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->spanName) {
            if (\is_array($this->spanName)) {
                $res['SpanName'] = [];
                $n1 = 0;
                foreach ($this->spanName as $item1) {
                    $res['SpanName'][$n1] = $item1;
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
        if (isset($map['SpanName'])) {
            if (!empty($map['SpanName'])) {
                $model->spanName = [];
                $n1 = 0;
                foreach ($map['SpanName'] as $item1) {
                    $model->spanName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
