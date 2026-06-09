<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateNamespaceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $namespaceARN;
    protected $_name = [
        'namespaceARN' => 'NamespaceARN',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->namespaceARN) {
            $res['NamespaceARN'] = $this->namespaceARN;
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
        if (isset($map['NamespaceARN'])) {
            $model->namespaceARN = $map['NamespaceARN'];
        }

        return $model;
    }
}
