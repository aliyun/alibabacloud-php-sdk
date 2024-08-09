<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class DeleteUdfArtifactResult extends Model
{
    /**
     * @var bool
     */
    public $deleteSuccess;

    /**
     * @var string
     */
    public $message;

    /**
     * @var UdfClass[]
     */
    public $referencedClasses;
    protected $_name = [
        'deleteSuccess'     => 'deleteSuccess',
        'message'           => 'message',
        'referencedClasses' => 'referencedClasses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteSuccess) {
            $res['deleteSuccess'] = $this->deleteSuccess;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->referencedClasses) {
            $res['referencedClasses'] = [];
            if (null !== $this->referencedClasses && \is_array($this->referencedClasses)) {
                $n = 0;
                foreach ($this->referencedClasses as $item) {
                    $res['referencedClasses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUdfArtifactResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deleteSuccess'])) {
            $model->deleteSuccess = $map['deleteSuccess'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['referencedClasses'])) {
            if (!empty($map['referencedClasses'])) {
                $model->referencedClasses = [];
                $n                        = 0;
                foreach ($map['referencedClasses'] as $item) {
                    $model->referencedClasses[$n++] = null !== $item ? UdfClass::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
