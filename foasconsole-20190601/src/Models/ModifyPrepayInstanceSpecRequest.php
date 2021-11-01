<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ModifyPrepayInstanceSpecRequest extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Foasconsole\V20190601\Models\ModifyPrepayInstanceSpecRequest\modifyPrepayInstanceSpecRequest
     */
    public $modifyPrepayInstanceSpecRequest;
    protected $_name = [
        'modifyPrepayInstanceSpecRequest' => 'ModifyPrepayInstanceSpecRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifyPrepayInstanceSpecRequest) {
            $res['ModifyPrepayInstanceSpecRequest'] = null !== $this->modifyPrepayInstanceSpecRequest ? $this->modifyPrepayInstanceSpecRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPrepayInstanceSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModifyPrepayInstanceSpecRequest'])) {
            $model->modifyPrepayInstanceSpecRequest = \AlibabaCloud\SDK\Foasconsole\V20190601\Models\ModifyPrepayInstanceSpecRequest\modifyPrepayInstanceSpecRequest::fromMap($map['ModifyPrepayInstanceSpecRequest']);
        }

        return $model;
    }
}
