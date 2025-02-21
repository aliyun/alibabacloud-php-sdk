<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\networkDiagnosisResult\diagnosis;

class networkDiagnosisResult extends Model
{
    /**
     * @var diagnosis[]
     */
    public $diagnosis;
    /**
     * @var string
     */
    public $modelVersion;
    protected $_name = [
        'diagnosis'    => 'Diagnosis',
        'modelVersion' => 'ModelVersion',
    ];

    public function validate()
    {
        if (\is_array($this->diagnosis)) {
            Model::validateArray($this->diagnosis);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diagnosis) {
            if (\is_array($this->diagnosis)) {
                $res['Diagnosis'] = [];
                $n1               = 0;
                foreach ($this->diagnosis as $item1) {
                    $res['Diagnosis'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
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
        if (isset($map['Diagnosis'])) {
            if (!empty($map['Diagnosis'])) {
                $model->diagnosis = [];
                $n1               = 0;
                foreach ($map['Diagnosis'] as $item1) {
                    $model->diagnosis[$n1++] = diagnosis::fromMap($item1);
                }
            }
        }

        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }

        return $model;
    }
}
