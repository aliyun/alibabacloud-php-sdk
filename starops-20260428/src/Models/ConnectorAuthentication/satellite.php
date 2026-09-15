<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models\ConnectorAuthentication;

use AlibabaCloud\Dara\Model;

class satellite extends Model
{
    /**
     * @var string
     */
    public $bindingName;
    protected $_name = [
        'bindingName' => 'bindingName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindingName) {
            $res['bindingName'] = $this->bindingName;
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
        if (isset($map['bindingName'])) {
            $model->bindingName = $map['bindingName'];
        }

        return $model;
    }
}
