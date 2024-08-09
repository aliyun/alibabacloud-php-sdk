<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collidingClasses) {
            $res['collidingClasses'] = [];
            if (null !== $this->collidingClasses && \is_array($this->collidingClasses)) {
                $n = 0;
                foreach ($this->collidingClasses as $item) {
                    $res['collidingClasses'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['udfArtifact'] = null !== $this->udfArtifact ? $this->udfArtifact->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUdfArtifactResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['collidingClasses'])) {
            if (!empty($map['collidingClasses'])) {
                $model->collidingClasses = [];
                $n                       = 0;
                foreach ($map['collidingClasses'] as $item) {
                    $model->collidingClasses[$n++] = null !== $item ? UdfClass::fromMap($item) : $item;
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
