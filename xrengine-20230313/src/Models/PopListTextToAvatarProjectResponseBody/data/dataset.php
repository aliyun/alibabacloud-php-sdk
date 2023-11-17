<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListTextToAvatarProjectResponseBody\data;

use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListTextToAvatarProjectResponseBody\data\dataset\policy;
use AlibabaCloud\Tea\Model;

class dataset extends Model
{
    /**
     * @var mixed[]
     */
    public $buildResultUrl;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var policy
     */
    public $policy;
    protected $_name = [
        'buildResultUrl' => 'BuildResultUrl',
        'createTime'     => 'CreateTime',
        'deleted'        => 'Deleted',
        'errorCode'      => 'ErrorCode',
        'errorMessage'   => 'ErrorMessage',
        'modifiedTime'   => 'ModifiedTime',
        'ossKey'         => 'OssKey',
        'policy'         => 'Policy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildResultUrl) {
            $res['BuildResultUrl'] = $this->buildResultUrl;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }
        if (null !== $this->policy) {
            $res['Policy'] = null !== $this->policy ? $this->policy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataset
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildResultUrl'])) {
            $model->buildResultUrl = $map['BuildResultUrl'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }
        if (isset($map['Policy'])) {
            $model->policy = policy::fromMap($map['Policy']);
        }

        return $model;
    }
}
