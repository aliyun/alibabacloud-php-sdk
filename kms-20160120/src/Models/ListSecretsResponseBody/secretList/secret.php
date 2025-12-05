<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsResponseBody\secretList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsResponseBody\secretList\secret\tags;

class secret extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $owingService;

    /**
     * @var string
     */
    public $plannedDeleteTime;

    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $secretType;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'owingService' => 'OwingService',
        'plannedDeleteTime' => 'PlannedDeleteTime',
        'secretName' => 'SecretName',
        'secretType' => 'SecretType',
        'tags' => 'Tags',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->owingService) {
            $res['OwingService'] = $this->owingService;
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['OwingService'])) {
            $model->owingService = $map['OwingService'];
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
