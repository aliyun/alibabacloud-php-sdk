<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class UpdatePackageRequest extends Model
{
    /**
     * @description The request body parameters.
     *
     * @example {
     * "add": {
     * "allowedProjectList": [
     * {
     * "label": "2",
     * "project": "project_name"
     * }
     * ],
     * "resourceList": {
     * "table": [
     * {
     * "name": "table_name",
     * "actions": [
     * "Describe",
     * "Select"
     * ]
     * },
     * {
     * "name": "table_name",
     * "actions": [
     * "Describe",
     * "Select"
     * ]
     * }
     * ],
     * "resource": [
     * {
     * "name": "",
     * "actions": []
     * },
     * {
     * "name": "",
     * "actions": []
     * }
     * ],
     * "function": [
     * {
     * "name": "",
     * "actions": []
     * },
     * {
     * "name": "",
     * "actions": []
     * }
     * ]
     * }
     * },
     * "remove": {
     * "allowedProjectList": [
     * {
     * "project": "project_name"
     * },
     * {
     * "project": "project_2"
     * }
     * ],
     * "resourceList": {
     * "table": [
     * {
     * "name": "table_name"
     * },
     * {
     * "name": "table_name"
     * }
     * ],
     * "resource": [
     * {
     * "name": ""
     * },
     * {
     * "name": ""
     * }
     * ],
     * "function": [
     * {
     * "name": ""
     * },
     * {
     * "name": ""
     * }
     * ]
     * }
     * }
     * }
     *
     * @var string
     */
    public $body;
    protected $_name = [
        'body' => 'body',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
