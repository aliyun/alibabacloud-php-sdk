<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DeleteLifecyclePolicyRequest extends Model
{
    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     * @example 31a8e4****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The name of the lifecycle policy.
     *
     * This parameter is required.
     * @example lifecyclepolicy1
     *
     * @var string
     */
    public $lifecyclePolicyName;
    protected $_name = [
        'fileSystemId'        => 'FileSystemId',
        'lifecyclePolicyName' => 'LifecyclePolicyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->lifecyclePolicyName) {
            $res['LifecyclePolicyName'] = $this->lifecyclePolicyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLifecyclePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['LifecyclePolicyName'])) {
            $model->lifecyclePolicyName = $map['LifecyclePolicyName'];
        }

        return $model;
    }
}
