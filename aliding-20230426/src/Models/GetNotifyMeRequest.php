<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetNotifyMeRequest extends Model
{
    /**
     * @var string
     */
    public $appTypes;
    /**
     * @var string
     */
    public $corpId;
    /**
     * @var int
     */
    public $createFromTimeGMT;
    /**
     * @var int
     */
    public $createToTimeGMT;
    /**
     * @var int
     */
    public $instanceCreateFromTimeGMT;
    /**
     * @var int
     */
    public $instanceCreateToTimeGMT;
    /**
     * @var string
     */
    public $keyword;
    /**
     * @var string
     */
    public $language;
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
    public $processCodes;
    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'appTypes'                  => 'AppTypes',
        'corpId'                    => 'CorpId',
        'createFromTimeGMT'         => 'CreateFromTimeGMT',
        'createToTimeGMT'           => 'CreateToTimeGMT',
        'instanceCreateFromTimeGMT' => 'InstanceCreateFromTimeGMT',
        'instanceCreateToTimeGMT'   => 'InstanceCreateToTimeGMT',
        'keyword'                   => 'Keyword',
        'language'                  => 'Language',
        'pageNumber'                => 'PageNumber',
        'pageSize'                  => 'PageSize',
        'processCodes'              => 'ProcessCodes',
        'token'                     => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appTypes) {
            $res['AppTypes'] = $this->appTypes;
        }

        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }

        if (null !== $this->createFromTimeGMT) {
            $res['CreateFromTimeGMT'] = $this->createFromTimeGMT;
        }

        if (null !== $this->createToTimeGMT) {
            $res['CreateToTimeGMT'] = $this->createToTimeGMT;
        }

        if (null !== $this->instanceCreateFromTimeGMT) {
            $res['InstanceCreateFromTimeGMT'] = $this->instanceCreateFromTimeGMT;
        }

        if (null !== $this->instanceCreateToTimeGMT) {
            $res['InstanceCreateToTimeGMT'] = $this->instanceCreateToTimeGMT;
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
        if (isset($map['AppTypes'])) {
            $model->appTypes = $map['AppTypes'];
        }

        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }

        if (isset($map['CreateFromTimeGMT'])) {
            $model->createFromTimeGMT = $map['CreateFromTimeGMT'];
        }

        if (isset($map['CreateToTimeGMT'])) {
            $model->createToTimeGMT = $map['CreateToTimeGMT'];
        }

        if (isset($map['InstanceCreateFromTimeGMT'])) {
            $model->instanceCreateFromTimeGMT = $map['InstanceCreateFromTimeGMT'];
        }

        if (isset($map['InstanceCreateToTimeGMT'])) {
            $model->instanceCreateToTimeGMT = $map['InstanceCreateToTimeGMT'];
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

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
