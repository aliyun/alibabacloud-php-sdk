<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DuplicateScriptRequest extends Model
{
    /**
     * @example 361c8a53-0e29-42f3-8aa7-c7752d010399
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 6114e7e8-4140-48d9-b46d-65ea29f13fe8
     *
     * @var string
     */
    public $sourceScriptId;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'name'           => 'Name',
        'sourceScriptId' => 'SourceScriptId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sourceScriptId) {
            $res['SourceScriptId'] = $this->sourceScriptId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DuplicateScriptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SourceScriptId'])) {
            $model->sourceScriptId = $map['SourceScriptId'];
        }

        return $model;
    }
}
