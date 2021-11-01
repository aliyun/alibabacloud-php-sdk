<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ModifyPrepayNamespaceSpecRequest extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Foasconsole\V20190601\Models\ModifyPrepayNamespaceSpecRequest\modifyPrepayNamespaceSpecRequest
     */
    public $modifyPrepayNamespaceSpecRequest;
    protected $_name = [
        'modifyPrepayNamespaceSpecRequest' => 'ModifyPrepayNamespaceSpecRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifyPrepayNamespaceSpecRequest) {
            $res['ModifyPrepayNamespaceSpecRequest'] = null !== $this->modifyPrepayNamespaceSpecRequest ? $this->modifyPrepayNamespaceSpecRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPrepayNamespaceSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModifyPrepayNamespaceSpecRequest'])) {
            $model->modifyPrepayNamespaceSpecRequest = \AlibabaCloud\SDK\Foasconsole\V20190601\Models\ModifyPrepayNamespaceSpecRequest\modifyPrepayNamespaceSpecRequest::fromMap($map['ModifyPrepayNamespaceSpecRequest']);
        }

        return $model;
    }
}
