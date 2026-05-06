<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class ListSampleRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $sampleName;

    /**
     * @var string
     */
    public $tab;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uploadTimeEnd;

    /**
     * @var string
     */
    public $uploadTimeStart;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'regId' => 'RegId',
        'sampleName' => 'SampleName',
        'tab' => 'Tab',
        'type' => 'Type',
        'uploadTimeEnd' => 'UploadTimeEnd',
        'uploadTimeStart' => 'UploadTimeStart',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regId) {
            $res['RegId'] = $this->regId;
        }

        if (null !== $this->sampleName) {
            $res['SampleName'] = $this->sampleName;
        }

        if (null !== $this->tab) {
            $res['Tab'] = $this->tab;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uploadTimeEnd) {
            $res['UploadTimeEnd'] = $this->uploadTimeEnd;
        }

        if (null !== $this->uploadTimeStart) {
            $res['UploadTimeStart'] = $this->uploadTimeStart;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegId'])) {
            $model->regId = $map['RegId'];
        }

        if (isset($map['SampleName'])) {
            $model->sampleName = $map['SampleName'];
        }

        if (isset($map['Tab'])) {
            $model->tab = $map['Tab'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UploadTimeEnd'])) {
            $model->uploadTimeEnd = $map['UploadTimeEnd'];
        }

        if (isset($map['UploadTimeStart'])) {
            $model->uploadTimeStart = $map['UploadTimeStart'];
        }

        return $model;
    }
}
