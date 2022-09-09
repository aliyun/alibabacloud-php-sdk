<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class ListAuthorizationsRequest extends Model
{
    /**
     * @var string
     */
    public $authorizationId;

    /**
     * @var string
     */
    public $authorizationType;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'authorizationId'   => 'authorizationId',
        'authorizationType' => 'authorizationType',
        'keyword'           => 'keyword',
        'pageNumber'        => 'pageNumber',
        'pageSize'          => 'pageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationId) {
            $res['authorizationId'] = $this->authorizationId;
        }
        if (null !== $this->authorizationType) {
            $res['authorizationType'] = $this->authorizationType;
        }
        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAuthorizationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authorizationId'])) {
            $model->authorizationId = $map['authorizationId'];
        }
        if (isset($map['authorizationType'])) {
            $model->authorizationType = $map['authorizationType'];
        }
        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
