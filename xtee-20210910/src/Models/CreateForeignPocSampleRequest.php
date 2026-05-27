<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class CreateForeignPocSampleRequest extends Model
{
    /**
     * @var string
     */
    public $file;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $sampleName;

    /**
     * @var string
     */
    public $tab;
    protected $_name = [
        'file' => 'File',
        'lang' => 'Lang',
        'regId' => 'RegId',
        'remark' => 'Remark',
        'sampleName' => 'SampleName',
        'tab' => 'Tab',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->file) {
            $res['File'] = $this->file;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->regId) {
            $res['RegId'] = $this->regId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->sampleName) {
            $res['SampleName'] = $this->sampleName;
        }

        if (null !== $this->tab) {
            $res['Tab'] = $this->tab;
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
        if (isset($map['File'])) {
            $model->file = $map['File'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RegId'])) {
            $model->regId = $map['RegId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SampleName'])) {
            $model->sampleName = $map['SampleName'];
        }

        if (isset($map['Tab'])) {
            $model->tab = $map['Tab'];
        }

        return $model;
    }
}
