<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->referencedClasses)) {
            Model::validateArray($this->referencedClasses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteSuccess) {
            $res['deleteSuccess'] = $this->deleteSuccess;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->referencedClasses) {
            if (\is_array($this->referencedClasses)) {
                $res['referencedClasses'] = [];
                $n1                       = 0;
                foreach ($this->referencedClasses as $item1) {
                    $res['referencedClasses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['deleteSuccess'])) {
            $model->deleteSuccess = $map['deleteSuccess'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['referencedClasses'])) {
            if (!empty($map['referencedClasses'])) {
                $model->referencedClasses = [];
                $n1                       = 0;
                foreach ($map['referencedClasses'] as $item1) {
                    $model->referencedClasses[$n1++] = UdfClass::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
