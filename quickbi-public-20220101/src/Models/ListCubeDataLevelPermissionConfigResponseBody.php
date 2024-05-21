<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ListCubeDataLevelPermissionConfigResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example D8749D65-E80A-433C-AF1B-CE9C180FF3B4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description { "isOpen": 1, "extraConfigModel": { // Additional configuration information "ruleType": "ROW_LEVEL", // The row-level permission type. "missHitPolicy": "NONE", // The hit rule policy: NONE has no permissions, and ALL has permissions. "cubeId": "7c7223 ae-31d1-4d2f-b11f-3c744528014b" // The ID of the dataset. }, "ruleType": "ROW_LEVEL", // Row-column permission type\\
     * "ruleModels": [ { "ruleUsersModel": { // The target population. "userGroups": [ "0d5fb19b- ****-1248 fc27ca51", // The ID of the user group. "4aa3f089-****-85f0-0e8ac7c2dee9" ], "users": [ "HuangJia ***2e3fa822", // The ID of the user. "4334***84358" ] }, "ruleContentModel": { "ruleContentType": "ROW_FIELD", // The row-column permission type. "ruleContentJson": "{"conditionNode":{"caption": " Period ","isMeasure":false,"pathId":"7d3b073bc6","relationOperator":"not-null","name":"7d3b073bc6","value":{"value":[""}UM]," ENueType "} // The JSON string of the row-column permission rule. "ruleOriginConfigJson": "{"operator":"and","operands":[{"labelName": " Period ","isValid":true,"uniqueId":"5","fieldId":"7d3b073bc6","error":false,"fieldType":"string",": default "" value":{"conditionOp":"not-null","conditionValue":""},"valueType":"ENUM"}}],"isRelation":true}" }, // The fixed-format JSON string required by the frontend "isOpen": 1, // The status of the row-column permission configuration. 1. On. 0. Off. "hitTakeEffect": 1, // Specifies whether the rule takes effect after a column-level permission is hit. 1 takes effect and 0 takes effect. "ruleName": "Test row-level permission_Do not delete", // The name of the row-column permission rule. "ruleLevelType": "ROW_LEVEL", // The row-column permission type. "ruleId": "a5bb24 da-772f-45e8-a43c-a891683e14da", // The ID of the row-column permission rule. "cubeId": "7c7223 ae-31d1-4d2f-b11f-3c744528014b", // The ID of the dataset. "ruleTargetScope": "OTHERS" rule takes effect: ALL owner and OTHERS designated owner. } ], "cubeId": "7c7223 ae-31d1-4d2f-b11f-3c744528014b" // The ID of the dataset. }
     * @example The JSON string of the row-column permission list. For more information, see the description.
     *
     * @var string
     */
    public $result;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   true: The request was successful.
     *   false: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'result'    => 'Result',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCubeDataLevelPermissionConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
