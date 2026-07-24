<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class DeleteDeploymentByNameRequest extends Model
{
    /**
     * @var string
     */
    public $deploymentName;
    protected $_name = [
        'deploymentName' => 'deploymentName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentName) {
            $res['deploymentName'] = $this->deploymentName;
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
        if (isset($map['deploymentName'])) {
            $model->deploymentName = $map['deploymentName'];
        }

        return $model;
    }
}
