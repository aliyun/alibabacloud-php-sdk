<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyClientConfStrategyRequest extends Model
{
    /**
     * @description The key of the tag that is added to the agent configuration policy.
     *
     * @example machineResource
     *
     * @var string
     */
    public $tag;

    /**
     * @description The extended tag of the agent configuration policy.
     *
     * @example auto
     *
     * @var string
     */
    public $tagExt;

    /**
     * @description The value of the tag that is added to the agent configuration policy.
     *
     *   major
     *   advanced
     *   basic
     *
     * @example advanced
     *
     * @var string
     */
    public $tagValue;

    /**
     * @description The UUID of the server that you want to query.
     *
     * @example 4fe8e1cd-3c37-4851-b9de-124da32c****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The UUID of the asset. You can specify a maximum of 500 UUIDs at a time.
     *
     * @var string[]
     */
    public $uuids;
    protected $_name = [
        'tag'      => 'Tag',
        'tagExt'   => 'TagExt',
        'tagValue' => 'TagValue',
        'uuid'     => 'Uuid',
        'uuids'    => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->tagExt) {
            $res['TagExt'] = $this->tagExt;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClientConfStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TagExt'])) {
            $model->tagExt = $map['TagExt'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = $map['Uuids'];
            }
        }

        return $model;
    }
}
