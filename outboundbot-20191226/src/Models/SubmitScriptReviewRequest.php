<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class SubmitScriptReviewRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $from;

    /**
     * @description This parameter is required.
     *
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example b0f35dd1-0337-402e-9c4f-3a6c2426950a
     *
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'description' => 'Description',
        'from' => 'From',
        'instanceId' => 'InstanceId',
        'scriptId' => 'ScriptId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitScriptReviewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        return $model;
    }
}
