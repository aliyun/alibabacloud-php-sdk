<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models;

use AlibabaCloud\Tea\Model;

class CloneConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $namespaceFrom;

    /**
     * @var string
     */
    public $namespaceTo;

    /**
     * @var string
     */
    public $data;
    protected $_name = [
        'policy'        => 'Policy',
        'namespaceFrom' => 'NamespaceFrom',
        'namespaceTo'   => 'NamespaceTo',
        'data'          => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->namespaceFrom) {
            $res['NamespaceFrom'] = $this->namespaceFrom;
        }
        if (null !== $this->namespaceTo) {
            $res['NamespaceTo'] = $this->namespaceTo;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloneConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['NamespaceFrom'])) {
            $model->namespaceFrom = $map['NamespaceFrom'];
        }
        if (isset($map['NamespaceTo'])) {
            $model->namespaceTo = $map['NamespaceTo'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        return $model;
    }
}
