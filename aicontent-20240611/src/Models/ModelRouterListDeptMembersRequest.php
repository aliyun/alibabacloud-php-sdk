<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterListDeptMembersRequest extends Model
{
    /**
     * @var string
     */
    public $authConfig;

    /**
     * @var bool
     */
    public $includeAuthorization;

    /**
     * @var bool
     */
    public $includeBalance;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'authConfig' => 'authConfig',
        'includeAuthorization' => 'includeAuthorization',
        'includeBalance' => 'includeBalance',
        'keyword' => 'keyword',
        'model' => 'model',
        'pageIndex' => 'pageIndex',
        'pageSize' => 'pageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authConfig) {
            $res['authConfig'] = $this->authConfig;
        }

        if (null !== $this->includeAuthorization) {
            $res['includeAuthorization'] = $this->includeAuthorization;
        }

        if (null !== $this->includeBalance) {
            $res['includeBalance'] = $this->includeBalance;
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->pageIndex) {
            $res['pageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
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
        if (isset($map['authConfig'])) {
            $model->authConfig = $map['authConfig'];
        }

        if (isset($map['includeAuthorization'])) {
            $model->includeAuthorization = $map['includeAuthorization'];
        }

        if (isset($map['includeBalance'])) {
            $model->includeBalance = $map['includeBalance'];
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['pageIndex'])) {
            $model->pageIndex = $map['pageIndex'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
