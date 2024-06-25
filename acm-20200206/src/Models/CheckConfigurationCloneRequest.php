<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models;

use AlibabaCloud\Tea\Model;

class CheckConfigurationCloneRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $data;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $namespaceFrom;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $namespaceTo;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $policy;
    protected $_name = [
        'data'          => 'Data',
        'namespaceFrom' => 'NamespaceFrom',
        'namespaceTo'   => 'NamespaceTo',
        'policy'        => 'Policy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->namespaceFrom) {
            $res['NamespaceFrom'] = $this->namespaceFrom;
        }
        if (null !== $this->namespaceTo) {
            $res['NamespaceTo'] = $this->namespaceTo;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckConfigurationCloneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['NamespaceFrom'])) {
            $model->namespaceFrom = $map['NamespaceFrom'];
        }
        if (isset($map['NamespaceTo'])) {
            $model->namespaceTo = $map['NamespaceTo'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        return $model;
    }
}
