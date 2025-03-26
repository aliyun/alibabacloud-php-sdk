<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\PreCheckCreateOrderForDeleteDBNodesResponseBody;

use AlibabaCloud\Dara\Model;

class failures extends Model
{
    /**
     * @var failures\failures[]
     */
    public $failures;
    protected $_name = [
        'failures' => 'Failures',
    ];

    public function validate()
    {
        if (\is_array($this->failures)) {
            Model::validateArray($this->failures);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failures) {
            if (\is_array($this->failures)) {
                $res['Failures'] = [];
                $n1 = 0;
                foreach ($this->failures as $item1) {
                    $res['Failures'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Failures'])) {
            if (!empty($map['Failures'])) {
                $model->failures = [];
                $n1 = 0;
                foreach ($map['Failures'] as $item1) {
                    $model->failures[$n1++] = failures\failures::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
