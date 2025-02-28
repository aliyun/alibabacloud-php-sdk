<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class CreateUdfArtifactResult extends Model
{
    /**
     * @var UdfClass[]
     */
    public $collidingClasses;
    /**
     * @var bool
     */
    public $createSuccess;
    /**
     * @var string
     */
    public $message;
    /**
     * @var UdfArtifact
     */
    public $udfArtifact;
    protected $_name = [
        'collidingClasses' => 'collidingClasses',
        'createSuccess'    => 'createSuccess',
        'message'          => 'message',
        'udfArtifact'      => 'udfArtifact',
    ];

    public function validate()
    {
        if (\is_array($this->collidingClasses)) {
            Model::validateArray($this->collidingClasses);
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
                $n1                      = 0;
                foreach ($this->collidingClasses as $item1) {
                    $res['collidingClasses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->createSuccess) {
            $res['createSuccess'] = $this->createSuccess;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->udfArtifact) {
            $res['udfArtifact'] = null !== $this->udfArtifact ? $this->udfArtifact->toArray($noStream) : $this->udfArtifact;
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
                $n1                      = 0;
                foreach ($map['collidingClasses'] as $item1) {
                    $model->collidingClasses[$n1++] = UdfClass::fromMap($item1);
                }
            }
        }

        if (isset($map['createSuccess'])) {
            $model->createSuccess = $map['createSuccess'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['udfArtifact'])) {
            $model->udfArtifact = UdfArtifact::fromMap($map['udfArtifact']);
        }

        return $model;
    }
}
