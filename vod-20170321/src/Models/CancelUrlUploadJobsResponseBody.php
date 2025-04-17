<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class CancelUrlUploadJobsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $canceledJobs;

    /**
     * @var string[]
     */
    public $nonExists;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'canceledJobs' => 'CanceledJobs',
        'nonExists' => 'NonExists',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->canceledJobs)) {
            Model::validateArray($this->canceledJobs);
        }
        if (\is_array($this->nonExists)) {
            Model::validateArray($this->nonExists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canceledJobs) {
            if (\is_array($this->canceledJobs)) {
                $res['CanceledJobs'] = [];
                $n1 = 0;
                foreach ($this->canceledJobs as $item1) {
                    $res['CanceledJobs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nonExists) {
            if (\is_array($this->nonExists)) {
                $res['NonExists'] = [];
                $n1 = 0;
                foreach ($this->nonExists as $item1) {
                    $res['NonExists'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CanceledJobs'])) {
            if (!empty($map['CanceledJobs'])) {
                $model->canceledJobs = [];
                $n1 = 0;
                foreach ($map['CanceledJobs'] as $item1) {
                    $model->canceledJobs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NonExists'])) {
            if (!empty($map['NonExists'])) {
                $model->nonExists = [];
                $n1 = 0;
                foreach ($map['NonExists'] as $item1) {
                    $model->nonExists[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
