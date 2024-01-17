<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class ListApplicationRequest extends Model
{
    /**
     * @example createdByMe
     *
     * @var string
     */
    public $appFilter;

    /**
     * @example keyword
     *
     * @var string
     */
    public $appNameSearchKeyword;

    /**
     * @example corpid
     *
     * @var string
     */
    public $corpId;

    /**
     * @example keyword
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example keyword
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example keyword
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'appFilter'            => 'AppFilter',
        'appNameSearchKeyword' => 'AppNameSearchKeyword',
        'corpId'               => 'CorpId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'token'                => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListApplicationRequest
     */
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
