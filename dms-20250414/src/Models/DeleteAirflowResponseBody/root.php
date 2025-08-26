<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\DeleteAirflowResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dms\V20250414\Models\DeleteAirflowResponseBody\root\responses;

class root extends Model
{
    /**
     * @var responses[]
     */
    public $responses;
    protected $_name = [
        'responses' => 'Responses',
    ];

    public function validate()
    {
        if (\is_array($this->responses)) {
            Model::validateArray($this->responses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->responses) {
            if (\is_array($this->responses)) {
                $res['Responses'] = [];
                $n1 = 0;
                foreach ($this->responses as $item1) {
                    $res['Responses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Responses'])) {
            if (!empty($map['Responses'])) {
                $model->responses = [];
                $n1 = 0;
                foreach ($map['Responses'] as $item1) {
                    $model->responses[$n1] = responses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
