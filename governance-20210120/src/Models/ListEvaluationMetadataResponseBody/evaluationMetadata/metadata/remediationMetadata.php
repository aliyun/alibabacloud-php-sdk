<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata\remediationMetadata\remediation;
use AlibabaCloud\Tea\Model;

class remediationMetadata extends Model
{
    /**
     * @description The fixing items.
     *
     * @var remediation[]
     */
    public $remediation;
    protected $_name = [
        'remediation' => 'Remediation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remediation) {
            $res['Remediation'] = [];
            if (null !== $this->remediation && \is_array($this->remediation)) {
                $n = 0;
                foreach ($this->remediation as $item) {
                    $res['Remediation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return remediationMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Remediation'])) {
            if (!empty($map['Remediation'])) {
                $model->remediation = [];
                $n                  = 0;
                foreach ($map['Remediation'] as $item) {
                    $model->remediation[$n++] = null !== $item ? remediation::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
