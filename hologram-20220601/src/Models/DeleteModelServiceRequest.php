<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;

class DeleteModelServiceRequest extends Model
{
    /**
     * @var string
     */
    public $modelServiceName;
    protected $_name = [
        'modelServiceName' => 'modelServiceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelServiceName) {
            $res['modelServiceName'] = $this->modelServiceName;
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
        if (isset($map['modelServiceName'])) {
            $model->modelServiceName = $map['modelServiceName'];
        }

        return $model;
    }
}
