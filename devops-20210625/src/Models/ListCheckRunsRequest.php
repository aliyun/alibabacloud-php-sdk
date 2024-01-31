<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListCheckRunsRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example 5ebbc0228123212b59xxxxx
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 40f4ccfe019cdd4a62d4acb0c57130106fc7e1be
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListCheckRunsRequest
     */
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
