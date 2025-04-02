<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class ListApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $appFilter;

    /**
     * @var string
     */
    public $appNameSearchKeyword;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'appFilter' => 'AppFilter',
        'appNameSearchKeyword' => 'AppNameSearchKeyword',
        'corpId' => 'CorpId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appFilter) {
            $res['AppFilter'] = $this->appFilter;
        }

        if (null !== $this->appNameSearchKeyword) {
            $res['AppNameSearchKeyword'] = $this->appNameSearchKeyword;
        }

        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['AppFilter'])) {
            $model->appFilter = $map['AppFilter'];
        }

        if (isset($map['AppNameSearchKeyword'])) {
            $model->appNameSearchKeyword = $map['AppNameSearchKeyword'];
        }

        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
