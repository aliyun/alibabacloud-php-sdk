<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\networkDiagnosisResult\diagnosis;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnosis) {
            $res['Diagnosis'] = [];
            if (null !== $this->diagnosis && \is_array($this->diagnosis)) {
                $n = 0;
                foreach ($this->diagnosis as $item) {
                    $res['Diagnosis'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkDiagnosisResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Diagnosis'])) {
            if (!empty($map['Diagnosis'])) {
                $model->diagnosis = [];
                $n                = 0;
                foreach ($map['Diagnosis'] as $item) {
                    $model->diagnosis[$n++] = null !== $item ? diagnosis::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }

        return $model;
    }
}
