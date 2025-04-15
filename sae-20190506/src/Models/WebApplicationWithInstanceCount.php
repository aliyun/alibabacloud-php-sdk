<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class WebApplicationWithInstanceCount extends Model
{
    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var WebApplication
     */
    public $webApplication;
    protected $_name = [
        'instanceCount' => 'InstanceCount',
        'webApplication' => 'WebApplication',
    ];

    public function validate()
    {
        if (null !== $this->webApplication) {
            $this->webApplication->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }

        if (null !== $this->webApplication) {
            $res['WebApplication'] = null !== $this->webApplication ? $this->webApplication->toArray($noStream) : $this->webApplication;
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
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }

        if (isset($map['WebApplication'])) {
            $model->webApplication = WebApplication::fromMap($map['WebApplication']);
        }

        return $model;
    }
}
