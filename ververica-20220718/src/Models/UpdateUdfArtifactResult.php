<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
        'message'          => 'message',
        'missingClasses'   => 'missingClasses',
        'udfArtifact'      => 'udfArtifact',
        'updateSuccess'    => 'updateSuccess',
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
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->missingClasses) {
            $res['missingClasses'] = [];
            if (null !== $this->missingClasses && \is_array($this->missingClasses)) {
                $n = 0;
                foreach ($this->missingClasses as $item) {
                    $res['missingClasses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->udfArtifact) {
            $res['udfArtifact'] = null !== $this->udfArtifact ? $this->udfArtifact->toMap() : null;
        }
        if (null !== $this->updateSuccess) {
            $res['updateSuccess'] = $this->updateSuccess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUdfArtifactResult
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
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['missingClasses'])) {
            if (!empty($map['missingClasses'])) {
                $model->missingClasses = [];
                $n                     = 0;
                foreach ($map['missingClasses'] as $item) {
                    $model->missingClasses[$n++] = null !== $item ? UdfClass::fromMap($item) : $item;
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
