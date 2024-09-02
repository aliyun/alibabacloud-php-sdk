<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class CreateABTestGroupRequest extends Model
{
    /**
     * @description The request body. For more information, see [ABTestGroup](https://help.aliyun.com/document_detail/178935.html).
     *
     * @var ABTestGroup
     */
    public $body;

    /**
     * @description Specifies whether to check the validity of input parameters. Default value: false.
     *
     * Valid values:
     *
     *   **true**: checks only the validity of input parameters.
     *   **false**: checks the validity of input parameters and creates an attribution configuration.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'body'   => 'body',
        'dryRun' => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateABTestGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = ABTestGroup::fromMap($map['body']);
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
