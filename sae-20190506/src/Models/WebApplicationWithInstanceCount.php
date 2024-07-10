<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

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
        'instanceCount'  => 'InstanceCount',
        'webApplication' => 'WebApplication',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->webApplication) {
            $res['WebApplication'] = null !== $this->webApplication ? $this->webApplication->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WebApplicationWithInstanceCount
     */
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
