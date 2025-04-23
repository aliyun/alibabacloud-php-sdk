<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\CreateTaskRequest;

use AlibabaCloud\Dara\Model;

class taskBackend extends Model
{
    /**
     * @var string
     */
    public $bucketEndpoint;

    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $objectPath;
    protected $_name = [
        'bucketEndpoint' => 'bucketEndpoint',
        'bucketName' => 'bucketName',
        'objectPath' => 'objectPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketEndpoint) {
            $res['bucketEndpoint'] = $this->bucketEndpoint;
        }

        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
        }

        if (null !== $this->objectPath) {
            $res['objectPath'] = $this->objectPath;
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
        if (isset($map['bucketEndpoint'])) {
            $model->bucketEndpoint = $map['bucketEndpoint'];
        }

        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }

        if (isset($map['objectPath'])) {
            $model->objectPath = $map['objectPath'];
        }

        return $model;
    }
}
