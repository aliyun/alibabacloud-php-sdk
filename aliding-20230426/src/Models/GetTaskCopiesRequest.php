<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetTaskCopiesRequest extends Model
{
    /**
     * @example APP_PBKxxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example 2021-05-01
     *
     * @var int
     */
    public $createFromTimeGMT;

    /**
     * @example 2021-05-01
     *
     * @var int
     */
    public $createToTimeGMT;

    /**
     * @example keyword
     *
     * @var string
     */
    public $keyword;

    /**
     * @example zh-CN
     *
     * @var string
     */
    public $language;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example ["xx","xxx"]
     *
     * @var string
     */
    public $processCodes;

    /**
     * @example hexxxx
     *
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType'           => 'AppType',
        'createFromTimeGMT' => 'CreateFromTimeGMT',
        'createToTimeGMT'   => 'CreateToTimeGMT',
        'keyword'           => 'Keyword',
        'language'          => 'Language',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'processCodes'      => 'ProcessCodes',
        'systemToken'       => 'SystemToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->createFromTimeGMT) {
            $res['CreateFromTimeGMT'] = $this->createFromTimeGMT;
        }
        if (null !== $this->createToTimeGMT) {
            $res['CreateToTimeGMT'] = $this->createToTimeGMT;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->processCodes) {
            $res['ProcessCodes'] = $this->processCodes;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskCopiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['CreateFromTimeGMT'])) {
            $model->createFromTimeGMT = $map['CreateFromTimeGMT'];
        }
        if (isset($map['CreateToTimeGMT'])) {
            $model->createToTimeGMT = $map['CreateToTimeGMT'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProcessCodes'])) {
            $model->processCodes = $map['ProcessCodes'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
