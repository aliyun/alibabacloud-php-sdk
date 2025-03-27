<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceDiagnosisResponseBody;

use AlibabaCloud\Dara\Model;

class diagnosisList extends Model
{
    /**
     * @var string[]
     */
    public $advices;

    /**
     * @var string[]
     */
    public $causes;

    /**
     * @var string
     */
    public $error;
    protected $_name = [
        'advices' => 'Advices',
        'causes' => 'Causes',
        'error' => 'Error',
    ];

    public function validate()
    {
        if (\is_array($this->advices)) {
            Model::validateArray($this->advices);
        }
        if (\is_array($this->causes)) {
            Model::validateArray($this->causes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advices) {
            if (\is_array($this->advices)) {
                $res['Advices'] = [];
                $n1 = 0;
                foreach ($this->advices as $item1) {
                    $res['Advices'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->causes) {
            if (\is_array($this->causes)) {
                $res['Causes'] = [];
                $n1 = 0;
                foreach ($this->causes as $item1) {
                    $res['Causes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->error) {
            $res['Error'] = $this->error;
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
        if (isset($map['Advices'])) {
            if (!empty($map['Advices'])) {
                $model->advices = [];
                $n1 = 0;
                foreach ($map['Advices'] as $item1) {
                    $model->advices[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Causes'])) {
            if (!empty($map['Causes'])) {
                $model->causes = [];
                $n1 = 0;
                foreach ($map['Causes'] as $item1) {
                    $model->causes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        return $model;
    }
}
