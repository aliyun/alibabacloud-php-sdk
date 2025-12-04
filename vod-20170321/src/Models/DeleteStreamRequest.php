<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DeleteStreamRequest extends Model
{
    /**
     * @var string
     */
    public $jobIds;

    /**
     * @var string
     */
    public $referenceId;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'jobIds' => 'JobIds',
        'referenceId' => 'ReferenceId',
        'videoId' => 'VideoId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobIds) {
            $res['JobIds'] = $this->jobIds;
        }

        if (null !== $this->referenceId) {
            $res['ReferenceId'] = $this->referenceId;
        }

        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
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
        if (isset($map['JobIds'])) {
            $model->jobIds = $map['JobIds'];
        }

        if (isset($map['ReferenceId'])) {
            $model->referenceId = $map['ReferenceId'];
        }

        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
