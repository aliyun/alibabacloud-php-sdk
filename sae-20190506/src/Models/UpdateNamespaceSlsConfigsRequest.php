<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class UpdateNamespaceSlsConfigsRequest extends Model
{
    /**
     * @var string
     */
    public $nameSpaceShortId;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $slsConfigs;
    protected $_name = [
        'nameSpaceShortId' => 'NameSpaceShortId',
        'namespaceId' => 'NamespaceId',
        'slsConfigs' => 'SlsConfigs',
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

        if (null !== $this->slsConfigs) {
            $res['SlsConfigs'] = $this->slsConfigs;
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

        if (isset($map['SlsConfigs'])) {
            $model->slsConfigs = $map['SlsConfigs'];
        }

        return $model;
    }
}
