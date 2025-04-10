<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata\remediationMetadata\remediation;

class remediationMetadata extends Model
{
    /**
     * @var remediation[]
     */
    public $remediation;
    protected $_name = [
        'remediation' => 'Remediation',
    ];

    public function validate()
    {
        if (\is_array($this->remediation)) {
            Model::validateArray($this->remediation);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remediation) {
            if (\is_array($this->remediation)) {
                $res['Remediation'] = [];
                $n1 = 0;
                foreach ($this->remediation as $item1) {
                    $res['Remediation'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Remediation'])) {
            if (!empty($map['Remediation'])) {
                $model->remediation = [];
                $n1 = 0;
                foreach ($map['Remediation'] as $item1) {
                    $model->remediation[$n1++] = remediation::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
