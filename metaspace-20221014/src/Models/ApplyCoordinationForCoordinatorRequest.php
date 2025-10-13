<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Metaspace\V20221014\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Metaspace\V20221014\Models\ApplyCoordinationForCoordinatorRequest\coordinationResourceCandidates;

class ApplyCoordinationForCoordinatorRequest extends Model
{
    /**
     * @var coordinationResourceCandidates[]
     */
    public $coordinationResourceCandidates;

    /**
     * @var string
     */
    public $initiatorType;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'coordinationResourceCandidates' => 'CoordinationResourceCandidates',
        'initiatorType' => 'InitiatorType',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->coordinationResourceCandidates)) {
            Model::validateArray($this->coordinationResourceCandidates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coordinationResourceCandidates) {
            if (\is_array($this->coordinationResourceCandidates)) {
                $res['CoordinationResourceCandidates'] = [];
                $n1 = 0;
                foreach ($this->coordinationResourceCandidates as $item1) {
                    $res['CoordinationResourceCandidates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->initiatorType) {
            $res['InitiatorType'] = $this->initiatorType;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['CoordinationResourceCandidates'])) {
            if (!empty($map['CoordinationResourceCandidates'])) {
                $model->coordinationResourceCandidates = [];
                $n1 = 0;
                foreach ($map['CoordinationResourceCandidates'] as $item1) {
                    $model->coordinationResourceCandidates[$n1] = coordinationResourceCandidates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InitiatorType'])) {
            $model->initiatorType = $map['InitiatorType'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
