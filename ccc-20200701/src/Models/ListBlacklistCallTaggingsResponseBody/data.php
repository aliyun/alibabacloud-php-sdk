<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListBlacklistCallTaggingsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $blacklisted;

    /**
     * @example job-481841171213393920
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 1521083xxxx
     *
     * @var string
     */
    public $number;
    protected $_name = [
        'blacklisted' => 'Blacklisted',
        'jobId'       => 'JobId',
        'number'      => 'Number',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blacklisted) {
            $res['Blacklisted'] = $this->blacklisted;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Blacklisted'])) {
            $model->blacklisted = $map['Blacklisted'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        return $model;
    }
}
