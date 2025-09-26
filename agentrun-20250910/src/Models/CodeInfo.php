<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CodeInfo extends Model
{
    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var string
     */
    public $ossObjectName;
    protected $_name = [
        'ossBucketName' => 'ossBucketName',
        'ossObjectName' => 'ossObjectName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossBucketName) {
            $res['ossBucketName'] = $this->ossBucketName;
        }

        if (null !== $this->ossObjectName) {
            $res['ossObjectName'] = $this->ossObjectName;
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
        if (isset($map['ossBucketName'])) {
            $model->ossBucketName = $map['ossBucketName'];
        }

        if (isset($map['ossObjectName'])) {
            $model->ossObjectName = $map['ossObjectName'];
        }

        return $model;
    }
}
