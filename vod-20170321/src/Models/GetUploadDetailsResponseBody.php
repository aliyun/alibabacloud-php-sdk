<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetUploadDetailsResponseBody\uploadDetails;

class GetUploadDetailsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $forbiddenMediaIds;

    /**
     * @var string[]
     */
    public $nonExistMediaIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var uploadDetails[]
     */
    public $uploadDetails;
    protected $_name = [
        'forbiddenMediaIds' => 'ForbiddenMediaIds',
        'nonExistMediaIds' => 'NonExistMediaIds',
        'requestId' => 'RequestId',
        'uploadDetails' => 'UploadDetails',
    ];

    public function validate()
    {
        if (\is_array($this->forbiddenMediaIds)) {
            Model::validateArray($this->forbiddenMediaIds);
        }
        if (\is_array($this->nonExistMediaIds)) {
            Model::validateArray($this->nonExistMediaIds);
        }
        if (\is_array($this->uploadDetails)) {
            Model::validateArray($this->uploadDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forbiddenMediaIds) {
            if (\is_array($this->forbiddenMediaIds)) {
                $res['ForbiddenMediaIds'] = [];
                $n1 = 0;
                foreach ($this->forbiddenMediaIds as $item1) {
                    $res['ForbiddenMediaIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nonExistMediaIds) {
            if (\is_array($this->nonExistMediaIds)) {
                $res['NonExistMediaIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistMediaIds as $item1) {
                    $res['NonExistMediaIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->uploadDetails) {
            if (\is_array($this->uploadDetails)) {
                $res['UploadDetails'] = [];
                $n1 = 0;
                foreach ($this->uploadDetails as $item1) {
                    $res['UploadDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ForbiddenMediaIds'])) {
            if (!empty($map['ForbiddenMediaIds'])) {
                $model->forbiddenMediaIds = [];
                $n1 = 0;
                foreach ($map['ForbiddenMediaIds'] as $item1) {
                    $model->forbiddenMediaIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NonExistMediaIds'])) {
            if (!empty($map['NonExistMediaIds'])) {
                $model->nonExistMediaIds = [];
                $n1 = 0;
                foreach ($map['NonExistMediaIds'] as $item1) {
                    $model->nonExistMediaIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UploadDetails'])) {
            if (!empty($map['UploadDetails'])) {
                $model->uploadDetails = [];
                $n1 = 0;
                foreach ($map['UploadDetails'] as $item1) {
                    $model->uploadDetails[$n1++] = uploadDetails::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
