<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryModifyInstancePriceRequest\modifyPrepayInstanceSpecRequest;

class QueryModifyInstancePriceRequest extends Model
{
    /**
     * @var modifyPrepayInstanceSpecRequest
     */
    public $modifyPrepayInstanceSpecRequest;
    protected $_name = [
        'modifyPrepayInstanceSpecRequest' => 'ModifyPrepayInstanceSpecRequest',
    ];

    public function validate()
    {
        if (null !== $this->modifyPrepayInstanceSpecRequest) {
            $this->modifyPrepayInstanceSpecRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modifyPrepayInstanceSpecRequest) {
            $res['ModifyPrepayInstanceSpecRequest'] = null !== $this->modifyPrepayInstanceSpecRequest ? $this->modifyPrepayInstanceSpecRequest->toArray($noStream) : $this->modifyPrepayInstanceSpecRequest;
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
        if (isset($map['ModifyPrepayInstanceSpecRequest'])) {
            $model->modifyPrepayInstanceSpecRequest = modifyPrepayInstanceSpecRequest::fromMap($map['ModifyPrepayInstanceSpecRequest']);
        }

        return $model;
    }
}
