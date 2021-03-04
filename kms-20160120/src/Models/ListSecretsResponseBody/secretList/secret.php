<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsResponseBody\secretList;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsResponseBody\secretList\secret\tags;
use AlibabaCloud\Tea\Model;

class secret extends Model
{
    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $secretName;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $secretType;

    /**
     * @var string
     */
    public $plannedDeleteTime;
    protected $_name = [
        'updateTime'        => 'UpdateTime',
        'createTime'        => 'CreateTime',
        'secretName'        => 'SecretName',
        'tags'              => 'Tags',
        'secretType'        => 'SecretType',
        'plannedDeleteTime' => 'PlannedDeleteTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->secretType) {
            $res['SecretType'] = $this->secretType;
        }
        if (null !== $this->plannedDeleteTime) {
            $res['PlannedDeleteTime'] = $this->plannedDeleteTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secret
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['SecretType'])) {
            $model->secretType = $map['SecretType'];
        }
        if (isset($map['PlannedDeleteTime'])) {
            $model->plannedDeleteTime = $map['PlannedDeleteTime'];
        }

        return $model;
    }
}
