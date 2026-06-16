<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class PackageWeightSizeCheckRequest extends Model
{
    /**
     * @var string
     */
    public $annotatedImageUrl;

    /**
     * @var string
     */
    public $rawImageUrl;
    protected $_name = [
        'annotatedImageUrl' => 'AnnotatedImageUrl',
        'rawImageUrl' => 'RawImageUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotatedImageUrl) {
            $res['AnnotatedImageUrl'] = $this->annotatedImageUrl;
        }

        if (null !== $this->rawImageUrl) {
            $res['RawImageUrl'] = $this->rawImageUrl;
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
        if (isset($map['AnnotatedImageUrl'])) {
            $model->annotatedImageUrl = $map['AnnotatedImageUrl'];
        }

        if (isset($map['RawImageUrl'])) {
            $model->rawImageUrl = $map['RawImageUrl'];
        }

        return $model;
    }
}
