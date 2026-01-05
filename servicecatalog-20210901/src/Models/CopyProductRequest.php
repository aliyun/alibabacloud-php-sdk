<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;

class CopyProductRequest extends Model
{
    /**
     * @var string
     */
    public $sourceProductArn;

    /**
     * @var string
     */
    public $targetProductName;
    protected $_name = [
        'sourceProductArn' => 'SourceProductArn',
        'targetProductName' => 'TargetProductName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceProductArn) {
            $res['SourceProductArn'] = $this->sourceProductArn;
        }

        if (null !== $this->targetProductName) {
            $res['TargetProductName'] = $this->targetProductName;
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
        if (isset($map['SourceProductArn'])) {
            $model->sourceProductArn = $map['SourceProductArn'];
        }

        if (isset($map['TargetProductName'])) {
            $model->targetProductName = $map['TargetProductName'];
        }

        return $model;
    }
}
