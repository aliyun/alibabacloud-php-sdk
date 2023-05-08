<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateCommonTargetConfigRequest extends Model
{
    /**
     * @description The name of the image repository or the namespace of the image repository.
     *
     * @example repoName
     *
     * @var string
     */
    public $fieldName;

    /**
     * @description The data returned.
     *
     * @example cafcmc-dev
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @description The type of the feature. Valid values:
     *
     *   **alidetect-scan-enable**: local file detection
     *   **ACTION-TRIAL-PERMISSION**: data delivery of ActionTrail
     *   **alidetect**: local file detection engine
     *   **container\_prevent\_escape**: container escape prevention
     *   **image\_repo**: repository image scan
     *   **proc\_filter\_switch**: log filtering
     *   **agentless**: agentless detection
     *   **rasp**: application protection
     *   **sensitiveFile**: sensitive file detection
     *   **aliscriptengine**: in-depth detection engine
     *   **containerNetwork**: container network visualization
     *
     * @example 182.92.XXX.XXX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The type of the image. Valid values:
     *
     *   **repoName**: the name of the image repository
     *   **repoNamespace**: the namespace of the image repository
     *
     * @example [
     * "targetType": "uuid",
     * "target": "f329a044-6a2f-49a0-9d33-352f6c1d****",
     * ]
     * @var string
     */
    public $targetOperations;

    /**
     * @description The configuration of proactive defense for your server. The value includes the following fields:
     *
     *   **targetType**: specifies the dimension from which you manage proactive defense. UUIDs are supported. Set the value to **uuid**.
     *   **target**: specifies the UUID of the server for which you want to configure proactive defense.
     *   **flag**: specifies whether to enable or disable proactive defense for your server. Valid values are **add** and **del**. The value add indicates that proactive defense will be enabled for your server. The value del indicates that proactive defense will be disabled for your server.
     *
     * @example uuid
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The dimension based on which you want to configure the feature. Valid values:
     *
     *   **uuid**: the UUID of the server
     *   **Cluster**: the ID of the cluster
     *   **image_repo**: the name of the image repository
     *
     * @example alidetect
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'fieldName'        => 'FieldName',
        'fieldValue'       => 'FieldValue',
        'sourceIp'         => 'SourceIp',
        'targetOperations' => 'TargetOperations',
        'targetType'       => 'TargetType',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->targetOperations) {
            $res['TargetOperations'] = $this->targetOperations;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateCommonTargetConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['TargetOperations'])) {
            $model->targetOperations = $map['TargetOperations'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
