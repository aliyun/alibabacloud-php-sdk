<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class LinkMergeRequestLabelRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string[]
     */
    public $labelIds;

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
        'labelIds' => 'labelIds',
        'localId' => 'localId',
        'organizationId' => 'organizationId',
        'repositoryIdentity' => 'repositoryIdentity',
    ];

    public function validate()
    {
        if (\is_array($this->labelIds)) {
            Model::validateArray($this->labelIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }

        if (null !== $this->labelIds) {
            if (\is_array($this->labelIds)) {
                $res['labelIds'] = [];
                $n1 = 0;
                foreach ($this->labelIds as $item1) {
                    $res['labelIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['labelIds'])) {
            if (!empty($map['labelIds'])) {
                $model->labelIds = [];
                $n1 = 0;
                foreach ($map['labelIds'] as $item1) {
                    $model->labelIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
