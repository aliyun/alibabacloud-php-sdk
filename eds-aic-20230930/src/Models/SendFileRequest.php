<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class SendFileRequest extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceIdList;
    /**
     * @var string
     */
    public $sourceFilePath;
    /**
     * @var string
     */
    public $uploadEndpoint;
    /**
     * @var string
     */
    public $uploadType;
    /**
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'androidInstanceIdList' => 'AndroidInstanceIdList',
        'sourceFilePath'        => 'SourceFilePath',
        'uploadEndpoint'        => 'UploadEndpoint',
        'uploadType'            => 'UploadType',
        'uploadUrl'             => 'UploadUrl',
    ];

    public function validate()
    {
        if (\is_array($this->androidInstanceIdList)) {
            Model::validateArray($this->androidInstanceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->androidInstanceIdList) {
            if (\is_array($this->androidInstanceIdList)) {
                $res['AndroidInstanceIdList'] = [];
                $n1                           = 0;
                foreach ($this->androidInstanceIdList as $item1) {
                    $res['AndroidInstanceIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sourceFilePath) {
            $res['SourceFilePath'] = $this->sourceFilePath;
        }

        if (null !== $this->uploadEndpoint) {
            $res['UploadEndpoint'] = $this->uploadEndpoint;
        }

        if (null !== $this->uploadType) {
            $res['UploadType'] = $this->uploadType;
        }

        if (null !== $this->uploadUrl) {
            $res['UploadUrl'] = $this->uploadUrl;
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
        if (isset($map['AndroidInstanceIdList'])) {
            if (!empty($map['AndroidInstanceIdList'])) {
                $model->androidInstanceIdList = [];
                $n1                           = 0;
                foreach ($map['AndroidInstanceIdList'] as $item1) {
                    $model->androidInstanceIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SourceFilePath'])) {
            $model->sourceFilePath = $map['SourceFilePath'];
        }

        if (isset($map['UploadEndpoint'])) {
            $model->uploadEndpoint = $map['UploadEndpoint'];
        }

        if (isset($map['UploadType'])) {
            $model->uploadType = $map['UploadType'];
        }

        if (isset($map['UploadUrl'])) {
            $model->uploadUrl = $map['UploadUrl'];
        }

        return $model;
    }
}
