<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class ListCheckRunsRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;
    /**
     * @var string
     */
    public $organizationId;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $ref;
    /**
     * @var string
     */
    public $repositoryIdentity;
    protected $_name = [
        'accessToken'        => 'accessToken',
        'organizationId'     => 'organizationId',
        'page'               => 'page',
        'pageSize'           => 'pageSize',
        'ref'                => 'ref',
        'repositoryIdentity' => 'repositoryIdentity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->ref) {
            $res['ref'] = $this->ref;
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

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['ref'])) {
            $model->ref = $map['ref'];
        }

        if (isset($map['repositoryIdentity'])) {
            $model->repositoryIdentity = $map['repositoryIdentity'];
        }

        return $model;
    }
}
