<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsResponseBody\secretList;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsResponseBody\secretList\secret\tags;
use AlibabaCloud\Tea\Model;

class secret extends Model
{
    /**
     * @description The tag value.
     *
     * @example 2022-07-17T07:59:05Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The resource tags of the secret.
     *
     * This parameter is not returned if you set the FetchTags parameter to false or do not specify the FetchTags parameter.
     * @example 2022-08-17T07:59:05Z
     *
     * @var string
     */
    public $plannedDeleteTime;

    /**
     * @description The type of the secret. Valid values:
     *
     *   Generic: indicates a generic secret.
     *   Rds: indicates a managed ApsaraDB RDS secret.
     *
     * @example secret001
     *
     * @var string
     */
    public $secretName;

    /**
     * @description The time when the secret was created.
     *
     * @example Generic
     *
     * @var string
     */
    public $secretType;

    /**
     * @description The tag key.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The time when the secret is scheduled to be deleted.
     *
     * @example 2022-07-17T07:59:05Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'plannedDeleteTime' => 'PlannedDeleteTime',
        'secretName'        => 'SecretName',
        'secretType'        => 'SecretType',
        'tags'              => 'Tags',
        'updateTime'        => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->plannedDeleteTime) {
            $res['PlannedDeleteTime'] = $this->plannedDeleteTime;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->secretType) {
            $res['SecretType'] = $this->secretType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['PlannedDeleteTime'])) {
            $model->plannedDeleteTime = $map['PlannedDeleteTime'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['SecretType'])) {
            $model->secretType = $map['SecretType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
