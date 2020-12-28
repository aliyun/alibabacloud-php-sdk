<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models;

use AlibabaCloud\Tea\Model;

class BatchExportConfigurationsRequest extends Model
{
    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $data;
    protected $_name = [
        'namespaceId' => 'NamespaceId',
        'data'        => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchExportConfigurationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        return $model;
    }
}
