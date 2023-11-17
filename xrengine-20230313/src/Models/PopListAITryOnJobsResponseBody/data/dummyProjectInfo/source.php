<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\dummyProjectInfo;

use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\dummyProjectInfo\source\clothes;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\dummyProjectInfo\source\policy;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\dummyProjectInfo\source\sourceFiles;
use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListAITryOnJobsResponseBody\data\dummyProjectInfo\source\token;
use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @var clothes[]
     */
    public $clothes;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var int
     */
    public $id;

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

    /**
     * @var sourceFiles[]
     */
    public $sourceFiles;

    /**
     * @var token
     */
    public $token;
    protected $_name = [
        'clothes'      => 'Clothes',
        'createTime'   => 'CreateTime',
        'deleted'      => 'Deleted',
        'id'           => 'Id',
        'modifiedTime' => 'ModifiedTime',
        'ossKey'       => 'OssKey',
        'policy'       => 'Policy',
        'sourceFiles'  => 'SourceFiles',
        'token'        => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clothes) {
            $res['Clothes'] = [];
            if (null !== $this->clothes && \is_array($this->clothes)) {
                $n = 0;
                foreach ($this->clothes as $item) {
                    $res['Clothes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->sourceFiles) {
            $res['SourceFiles'] = [];
            if (null !== $this->sourceFiles && \is_array($this->sourceFiles)) {
                $n = 0;
                foreach ($this->sourceFiles as $item) {
                    $res['SourceFiles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->token) {
            $res['Token'] = null !== $this->token ? $this->token->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return source
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clothes'])) {
            if (!empty($map['Clothes'])) {
                $model->clothes = [];
                $n              = 0;
                foreach ($map['Clothes'] as $item) {
                    $model->clothes[$n++] = null !== $item ? clothes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['SourceFiles'])) {
            if (!empty($map['SourceFiles'])) {
                $model->sourceFiles = [];
                $n                  = 0;
                foreach ($map['SourceFiles'] as $item) {
                    $model->sourceFiles[$n++] = null !== $item ? sourceFiles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Token'])) {
            $model->token = token::fromMap($map['Token']);
        }

        return $model;
    }
}
