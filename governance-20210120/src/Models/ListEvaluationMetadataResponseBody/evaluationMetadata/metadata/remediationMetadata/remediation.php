<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata\remediationMetadata;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata\remediationMetadata\remediation\actions;
use AlibabaCloud\Tea\Model;

class remediation extends Model
{
    /**
     * @var actions[]
     */
    public $actions;

    /**
     * @example Manual
     *
     * @var string
     */
    public $remediationType;
    protected $_name = [
        'actions'         => 'Actions',
        'remediationType' => 'RemediationType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['Actions'] = [];
            if (null !== $this->actions && \is_array($this->actions)) {
                $n = 0;
                foreach ($this->actions as $item) {
                    $res['Actions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->remediationType) {
            $res['RemediationType'] = $this->remediationType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return remediation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Actions'])) {
            if (!empty($map['Actions'])) {
                $model->actions = [];
                $n              = 0;
                foreach ($map['Actions'] as $item) {
                    $model->actions[$n++] = null !== $item ? actions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RemediationType'])) {
            $model->remediationType = $map['RemediationType'];
        }

        return $model;
    }
}
