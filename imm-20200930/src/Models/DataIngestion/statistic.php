<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\DataIngestion;

use AlibabaCloud\Dara\Model;

class statistic extends Model
{
    /**
     * @var int
     */
    public $skipFiles;

    /**
     * @var int
     */
    public $submitFailure;

    /**
     * @var int
     */
    public $submitSuccess;
    protected $_name = [
        'skipFiles' => 'SkipFiles',
        'submitFailure' => 'SubmitFailure',
        'submitSuccess' => 'SubmitSuccess',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skipFiles) {
            $res['SkipFiles'] = $this->skipFiles;
        }

        if (null !== $this->submitFailure) {
            $res['SubmitFailure'] = $this->submitFailure;
        }

        if (null !== $this->submitSuccess) {
            $res['SubmitSuccess'] = $this->submitSuccess;
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
        if (isset($map['SkipFiles'])) {
            $model->skipFiles = $map['SkipFiles'];
        }

        if (isset($map['SubmitFailure'])) {
            $model->submitFailure = $map['SubmitFailure'];
        }

        if (isset($map['SubmitSuccess'])) {
            $model->submitSuccess = $map['SubmitSuccess'];
        }

        return $model;
    }
}
