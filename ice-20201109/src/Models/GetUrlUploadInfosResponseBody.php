<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetUrlUploadInfosResponseBody\URLUploadInfoList;

class GetUrlUploadInfosResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $nonExists;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var URLUploadInfoList[]
     */
    public $URLUploadInfoList;
    protected $_name = [
        'nonExists'         => 'NonExists',
        'requestId'         => 'RequestId',
        'URLUploadInfoList' => 'URLUploadInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->nonExists)) {
            Model::validateArray($this->nonExists);
        }
        if (\is_array($this->URLUploadInfoList)) {
            Model::validateArray($this->URLUploadInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nonExists) {
            if (\is_array($this->nonExists)) {
                $res['NonExists'] = [];
                $n1               = 0;
                foreach ($this->nonExists as $item1) {
                    $res['NonExists'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->URLUploadInfoList) {
            if (\is_array($this->URLUploadInfoList)) {
                $res['URLUploadInfoList'] = [];
                $n1                       = 0;
                foreach ($this->URLUploadInfoList as $item1) {
                    $res['URLUploadInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NonExists'])) {
            if (!empty($map['NonExists'])) {
                $model->nonExists = [];
                $n1               = 0;
                foreach ($map['NonExists'] as $item1) {
                    $model->nonExists[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['URLUploadInfoList'])) {
            if (!empty($map['URLUploadInfoList'])) {
                $model->URLUploadInfoList = [];
                $n1                       = 0;
                foreach ($map['URLUploadInfoList'] as $item1) {
                    $model->URLUploadInfoList[$n1++] = URLUploadInfoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
