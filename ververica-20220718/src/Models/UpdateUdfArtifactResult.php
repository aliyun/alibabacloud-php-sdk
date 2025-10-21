<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class UpdateUdfArtifactResult extends Model
{
    /**
     * @var UdfClass[]
     */
    public $collidingClasses;

    /**
     * @var string
     */
    public $message;

    /**
     * @var UdfClass[]
     */
    public $missingClasses;

    /**
     * @var UdfArtifact
     */
    public $udfArtifact;

    /**
     * @var bool
     */
    public $updateSuccess;
    protected $_name = [
        'collidingClasses' => 'collidingClasses',
        'message' => 'message',
        'missingClasses' => 'missingClasses',
        'udfArtifact' => 'udfArtifact',
        'updateSuccess' => 'updateSuccess',
    ];

    public function validate()
    {
        if (\is_array($this->collidingClasses)) {
            Model::validateArray($this->collidingClasses);
        }
        if (\is_array($this->missingClasses)) {
            Model::validateArray($this->missingClasses);
        }
        if (null !== $this->udfArtifact) {
            $this->udfArtifact->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collidingClasses) {
            if (\is_array($this->collidingClasses)) {
                $res['collidingClasses'] = [];
                $n1 = 0;
                foreach ($this->collidingClasses as $item1) {
                    $res['collidingClasses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->missingClasses) {
            if (\is_array($this->missingClasses)) {
                $res['missingClasses'] = [];
                $n1 = 0;
                foreach ($this->missingClasses as $item1) {
                    $res['missingClasses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->udfArtifact) {
            $res['udfArtifact'] = null !== $this->udfArtifact ? $this->udfArtifact->toArray($noStream) : $this->udfArtifact;
        }

        if (null !== $this->updateSuccess) {
            $res['updateSuccess'] = $this->updateSuccess;
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
        if (isset($map['collidingClasses'])) {
            if (!empty($map['collidingClasses'])) {
                $model->collidingClasses = [];
                $n1 = 0;
                foreach ($map['collidingClasses'] as $item1) {
                    $model->collidingClasses[$n1] = UdfClass::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['missingClasses'])) {
            if (!empty($map['missingClasses'])) {
                $model->missingClasses = [];
                $n1 = 0;
                foreach ($map['missingClasses'] as $item1) {
                    $model->missingClasses[$n1] = UdfClass::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['udfArtifact'])) {
            $model->udfArtifact = UdfArtifact::fromMap($map['udfArtifact']);
        }

        if (isset($map['updateSuccess'])) {
            $model->updateSuccess = $map['updateSuccess'];
        }

        return $model;
    }
}
