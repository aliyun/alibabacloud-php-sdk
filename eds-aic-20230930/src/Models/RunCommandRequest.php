<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class RunCommandRequest extends Model
{
    /**
     * @example ls
     *
     * @var string
     */
    public $commandContent;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @example 60
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'commandContent' => 'CommandContent',
        'instanceIds'    => 'InstanceIds',
        'timeout'        => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunCommandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
