<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class DeleteLifecyclePolicyRequest extends Model
{
    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $lifecyclePolicyId;

    /**
     * @var string
     */
    public $lifecyclePolicyName;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'lifecyclePolicyId' => 'LifecyclePolicyId',
        'lifecyclePolicyName' => 'LifecyclePolicyName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->lifecyclePolicyId) {
            $res['LifecyclePolicyId'] = $this->lifecyclePolicyId;
        }

        if (null !== $this->lifecyclePolicyName) {
            $res['LifecyclePolicyName'] = $this->lifecyclePolicyName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['LifecyclePolicyId'])) {
            $model->lifecyclePolicyId = $map['LifecyclePolicyId'];
        }

        if (isset($map['LifecyclePolicyName'])) {
            $model->lifecyclePolicyName = $map['LifecyclePolicyName'];
        }

        return $model;
    }
}
