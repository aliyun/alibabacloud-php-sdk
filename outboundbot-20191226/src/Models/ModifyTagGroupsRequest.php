<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ModifyTagGroupsRequest extends Model
{
    /**
     * @example cd560e89-0459-4c8a-ad98-47d713e4abd6
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 365b955d-6f4d-4ab5-a6e1-9a301307f4b1
     *
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $tagGroups;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'scriptId'   => 'ScriptId',
        'tagGroups'  => 'TagGroups',
        'tags'       => 'Tags',
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
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->tagGroups) {
            $res['TagGroups'] = $this->tagGroups;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTagGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['TagGroups'])) {
            $model->tagGroups = $map['TagGroups'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
