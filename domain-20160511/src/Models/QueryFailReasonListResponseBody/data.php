<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20160511\Models\QueryFailReasonListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20160511\Models\QueryFailReasonListResponseBody\data\failRecord;

class data extends Model
{
    /**
     * @var failRecord[]
     */
    public $failRecord;
    protected $_name = [
        'failRecord' => 'FailRecord',
    ];

    public function validate()
    {
        if (\is_array($this->failRecord)) {
            Model::validateArray($this->failRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failRecord) {
            if (\is_array($this->failRecord)) {
                $res['FailRecord'] = [];
                $n1 = 0;
                foreach ($this->failRecord as $item1) {
                    $res['FailRecord'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FailRecord'])) {
            if (!empty($map['FailRecord'])) {
                $model->failRecord = [];
                $n1 = 0;
                foreach ($map['FailRecord'] as $item1) {
                    $model->failRecord[$n1] = failRecord::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
