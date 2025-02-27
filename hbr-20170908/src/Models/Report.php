<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class Report extends Model
{
    /**
     * @var string
     */
    public $failedFiles;
    /**
     * @var string
     */
    public $skippedFiles;
    /**
     * @var string
     */
    public $successFiles;
    /**
     * @var string
     */
    public $totalFiles;
    protected $_name = [
        'failedFiles'  => 'FailedFiles',
        'skippedFiles' => 'SkippedFiles',
        'successFiles' => 'SuccessFiles',
        'totalFiles'   => 'TotalFiles',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedFiles) {
            $res['FailedFiles'] = $this->failedFiles;
        }

        if (null !== $this->skippedFiles) {
            $res['SkippedFiles'] = $this->skippedFiles;
        }

        if (null !== $this->successFiles) {
            $res['SuccessFiles'] = $this->successFiles;
        }

        if (null !== $this->totalFiles) {
            $res['TotalFiles'] = $this->totalFiles;
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
        if (isset($map['FailedFiles'])) {
            $model->failedFiles = $map['FailedFiles'];
        }

        if (isset($map['SkippedFiles'])) {
            $model->skippedFiles = $map['SkippedFiles'];
        }

        if (isset($map['SuccessFiles'])) {
            $model->successFiles = $map['SuccessFiles'];
        }

        if (isset($map['TotalFiles'])) {
            $model->totalFiles = $map['TotalFiles'];
        }

        return $model;
    }
}
