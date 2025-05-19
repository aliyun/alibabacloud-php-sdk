<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models;

use AlibabaCloud\Dara\Model;

class CreateHybridDoubleWriteRequest extends Model
{
    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $sourceNamespace;

    /**
     * @var int
     */
    public $sourceUserId;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'namespace' => 'Namespace',
        'sourceNamespace' => 'SourceNamespace',
        'sourceUserId' => 'SourceUserId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->sourceNamespace) {
            $res['SourceNamespace'] = $this->sourceNamespace;
        }

        if (null !== $this->sourceUserId) {
            $res['SourceUserId'] = $this->sourceUserId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['SourceNamespace'])) {
            $model->sourceNamespace = $map['SourceNamespace'];
        }

        if (isset($map['SourceUserId'])) {
            $model->sourceUserId = $map['SourceUserId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
