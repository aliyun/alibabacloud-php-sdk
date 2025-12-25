<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\ModifyPrepayNamespaceSpecRequest\modifyPrepayNamespaceSpecRequest;

class ModifyPrepayNamespaceSpecRequest extends Model
{
    /**
     * @var modifyPrepayNamespaceSpecRequest
     */
    public $modifyPrepayNamespaceSpecRequest;
    protected $_name = [
        'modifyPrepayNamespaceSpecRequest' => 'ModifyPrepayNamespaceSpecRequest',
    ];

    public function validate()
    {
        if (null !== $this->modifyPrepayNamespaceSpecRequest) {
            $this->modifyPrepayNamespaceSpecRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modifyPrepayNamespaceSpecRequest) {
            $res['ModifyPrepayNamespaceSpecRequest'] = null !== $this->modifyPrepayNamespaceSpecRequest ? $this->modifyPrepayNamespaceSpecRequest->toArray($noStream) : $this->modifyPrepayNamespaceSpecRequest;
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
        if (isset($map['ModifyPrepayNamespaceSpecRequest'])) {
            $model->modifyPrepayNamespaceSpecRequest = self::fromMap($map['ModifyPrepayNamespaceSpecRequest']);
        }

        return $model;
    }
}
