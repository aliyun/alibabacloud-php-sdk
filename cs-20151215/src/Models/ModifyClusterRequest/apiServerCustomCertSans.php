<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest;

use AlibabaCloud\Dara\Model;

class apiServerCustomCertSans extends Model
{
    /**
     * @var string
     */
    public $action;
    /**
     * @var string[]
     */
    public $subjectAlternativeNames;
    protected $_name = [
        'action'                  => 'action',
        'subjectAlternativeNames' => 'subject_alternative_names',
    ];

    public function validate()
    {
        if (\is_array($this->subjectAlternativeNames)) {
            Model::validateArray($this->subjectAlternativeNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->subjectAlternativeNames) {
            if (\is_array($this->subjectAlternativeNames)) {
                $res['subject_alternative_names'] = [];
                $n1                               = 0;
                foreach ($this->subjectAlternativeNames as $item1) {
                    $res['subject_alternative_names'][$n1++] = $item1;
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['subject_alternative_names'])) {
            if (!empty($map['subject_alternative_names'])) {
                $model->subjectAlternativeNames = [];
                $n1                             = 0;
                foreach ($map['subject_alternative_names'] as $item1) {
                    $model->subjectAlternativeNames[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
