<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class ListMergeRequestCommentsRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $commentType;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string[]
     */
    public $patchSetBizIds;

    /**
     * @var bool
     */
    public $resolved;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $localId;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $repositoryIdentity;
    protected $_name = [
        'accessToken' => 'accessToken',
        'commentType' => 'commentType',
        'filePath' => 'filePath',
        'patchSetBizIds' => 'patchSetBizIds',
        'resolved' => 'resolved',
        'state' => 'state',
        'localId' => 'localId',
        'organizationId' => 'organizationId',
        'repositoryIdentity' => 'repositoryIdentity',
    ];

    public function validate()
    {
        if (\is_array($this->patchSetBizIds)) {
            Model::validateArray($this->patchSetBizIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }

        if (null !== $this->commentType) {
            $res['commentType'] = $this->commentType;
        }

        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
        }

        if (null !== $this->patchSetBizIds) {
            if (\is_array($this->patchSetBizIds)) {
                $res['patchSetBizIds'] = [];
                $n1 = 0;
                foreach ($this->patchSetBizIds as $item1) {
                    $res['patchSetBizIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resolved) {
            $res['resolved'] = $this->resolved;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->localId) {
            $res['localId'] = $this->localId;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->repositoryIdentity) {
            $res['repositoryIdentity'] = $this->repositoryIdentity;
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
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }

        if (isset($map['commentType'])) {
            $model->commentType = $map['commentType'];
        }

        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }

        if (isset($map['patchSetBizIds'])) {
            if (!empty($map['patchSetBizIds'])) {
                $model->patchSetBizIds = [];
                $n1 = 0;
                foreach ($map['patchSetBizIds'] as $item1) {
                    $model->patchSetBizIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['resolved'])) {
            $model->resolved = $map['resolved'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['localId'])) {
            $model->localId = $map['localId'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['repositoryIdentity'])) {
            $model->repositoryIdentity = $map['repositoryIdentity'];
        }

        return $model;
    }
}
