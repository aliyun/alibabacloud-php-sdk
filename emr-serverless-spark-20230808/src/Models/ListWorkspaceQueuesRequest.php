<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class ListWorkspaceQueuesRequest extends Model
{
    /**
     * @example production
     *
     * @var string
     */
    public $environment;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'environment' => 'environment',
        'regionId'    => 'regionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environment) {
            $res['environment'] = $this->environment;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkspaceQueuesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['environment'])) {
            $model->environment = $map['environment'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
