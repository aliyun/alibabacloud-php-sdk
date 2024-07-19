<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceShrinkRequest extends Model
{
    /**
     * @description Specifies whether to enter development mode.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     * @example true
     *
     * @var string
     */
    public $develop;

    /**
     * @description The custom label.
     *
     * @var string
     */
    public $labelsShrink;

    /**
     * @description The workspace ID.
     *
     * @example 123456
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description The request body. For more information about the key request parameters, see **Table 1. Request body parameters** and **Table 2. Metadata parameters**. For more information about all related parameters, see [Parameters of model services](https://help.aliyun.com/document_detail/450525.html).
     *
     * @example Service deployment by using an image:
     * {
     * "image": "****",
     * "script": "**** --listen=0.0.0.0 --server_port=8000 --headless",
     * {
     * "image": "****",
     * "script": "**** --listen=0.0.0.0 --server_port=8000 --headless",
     * "processor_type": "python",
     * "processor_path": "oss://****",
     * "processor_entry": "a.py",
     * "model_path": "oss://****"
     * }
     * @var string
     */
    public $body;
    protected $_name = [
        'develop'      => 'Develop',
        'labelsShrink' => 'Labels',
        'workspaceId'  => 'WorkspaceId',
        'body'         => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->develop) {
            $res['Develop'] = $this->develop;
        }
        if (null !== $this->labelsShrink) {
            $res['Labels'] = $this->labelsShrink;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Develop'])) {
            $model->develop = $map['Develop'];
        }
        if (isset($map['Labels'])) {
            $model->labelsShrink = $map['Labels'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
