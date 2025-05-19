<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models;

use AlibabaCloud\Dara\Model;

class DescribeHybridDoubleWriteRequest extends Model
{
    /**
     * @var string
     */
    public $sourceNamespace;

    /**
     * @var string
     */
    public $sourceUserId;

    /**
     * @var string
     */
    public $targetNamespace;

    /**
     * @var string
     */
    public $targetUserId;
    protected $_name = [
        'sourceNamespace' => 'SourceNamespace',
        'sourceUserId' => 'SourceUserId',
        'targetNamespace' => 'TargetNamespace',
        'targetUserId' => 'TargetUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceNamespace) {
            $res['SourceNamespace'] = $this->sourceNamespace;
        }

        if (null !== $this->sourceUserId) {
            $res['SourceUserId'] = $this->sourceUserId;
        }

        if (null !== $this->targetNamespace) {
            $res['TargetNamespace'] = $this->targetNamespace;
        }

        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
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
        if (isset($map['SourceNamespace'])) {
            $model->sourceNamespace = $map['SourceNamespace'];
        }

        if (isset($map['SourceUserId'])) {
            $model->sourceUserId = $map['SourceUserId'];
        }

        if (isset($map['TargetNamespace'])) {
            $model->targetNamespace = $map['TargetNamespace'];
        }

        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }

        return $model;
    }
}
