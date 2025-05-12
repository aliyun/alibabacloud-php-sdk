<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output\outSubtitleList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output\outSubtitleList\outSubtitle\outSubtitleFile;

class outSubtitle extends Model
{
    /**
     * @var string
     */
    public $map;

    /**
     * @var string
     */
    public $message;

    /**
     * @var outSubtitleFile
     */
    public $outSubtitleFile;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'map' => 'Map',
        'message' => 'Message',
        'outSubtitleFile' => 'OutSubtitleFile',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->outSubtitleFile) {
            $this->outSubtitleFile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->map) {
            $res['Map'] = $this->map;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->outSubtitleFile) {
            $res['OutSubtitleFile'] = null !== $this->outSubtitleFile ? $this->outSubtitleFile->toArray($noStream) : $this->outSubtitleFile;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Map'])) {
            $model->map = $map['Map'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['OutSubtitleFile'])) {
            $model->outSubtitleFile = outSubtitleFile::fromMap($map['OutSubtitleFile']);
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
