<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class DeleteNamespaceRequest extends Model
{
    /**
     * @var string
     */
    public $nameSpaceShortId;

    /**
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'nameSpaceShortId' => 'NameSpaceShortId',
        'namespaceId' => 'NamespaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nameSpaceShortId) {
            $res['NameSpaceShortId'] = $this->nameSpaceShortId;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
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
        if (isset($map['NameSpaceShortId'])) {
            $model->nameSpaceShortId = $map['NameSpaceShortId'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}
