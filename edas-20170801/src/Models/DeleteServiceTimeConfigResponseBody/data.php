<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\DeleteServiceTimeConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $timeout;

    /**
     * @var string
     */
    public $consumerAppName;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $consumerAppId;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'timeout'         => 'Timeout',
        'consumerAppName' => 'ConsumerAppName',
        'path'            => 'Path',
        'consumerAppId'   => 'ConsumerAppId',
        'id'              => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->consumerAppName) {
            $res['ConsumerAppName'] = $this->consumerAppName;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->consumerAppId) {
            $res['ConsumerAppId'] = $this->consumerAppId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['ConsumerAppName'])) {
            $model->consumerAppName = $map['ConsumerAppName'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ConsumerAppId'])) {
            $model->consumerAppId = $map['ConsumerAppId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
