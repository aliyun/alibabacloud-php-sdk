<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest;

use AlibabaCloud\Tea\Model;

class apiServerCustomCertSans extends Model
{
    /**
     * @description Specifies whether to overwrite or add SANs. Valid values:
     *
     *   overwrite: overwrites SANs.
     *   append: adds SANs.
     *
     * @example append
     *
     * @var string
     */
    public $action;

    /**
     * @description The SANs.
     *
     * @var string[]
     */
    public $subjectAlternativeNames;
    protected $_name = [
        'action'                  => 'action',
        'subjectAlternativeNames' => 'subject_alternative_names',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->subjectAlternativeNames) {
            $res['subject_alternative_names'] = $this->subjectAlternativeNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiServerCustomCertSans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['subject_alternative_names'])) {
            if (!empty($map['subject_alternative_names'])) {
                $model->subjectAlternativeNames = $map['subject_alternative_names'];
            }
        }

        return $model;
    }
}
