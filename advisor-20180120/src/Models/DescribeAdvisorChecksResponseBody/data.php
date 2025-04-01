<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvisorChecksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvisorChecksResponseBody\data\advisorCheck;

class data extends Model
{
    /**
     * @var advisorCheck[]
     */
    public $advisorCheck;
    protected $_name = [
        'advisorCheck' => 'AdvisorCheck',
    ];

    public function validate()
    {
        if (\is_array($this->advisorCheck)) {
            Model::validateArray($this->advisorCheck);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advisorCheck) {
            if (\is_array($this->advisorCheck)) {
                $res['AdvisorCheck'] = [];
                $n1 = 0;
                foreach ($this->advisorCheck as $item1) {
                    $res['AdvisorCheck'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AdvisorCheck'])) {
            if (!empty($map['AdvisorCheck'])) {
                $model->advisorCheck = [];
                $n1 = 0;
                foreach ($map['AdvisorCheck'] as $item1) {
                    $model->advisorCheck[$n1++] = advisorCheck::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
