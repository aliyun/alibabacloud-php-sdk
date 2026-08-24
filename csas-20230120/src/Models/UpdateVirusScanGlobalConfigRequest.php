<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class UpdateVirusScanGlobalConfigRequest extends Model
{
    /**
     * @var int
     */
    public $uploadFileMaxSize;

    /**
     * @var int
     */
    public $uploadFileMaxSpeed;

    /**
     * @var string[]
     */
    public $uploadFileSuffixBlacklist;

    /**
     * @var bool
     */
    public $virusFileUpload;
    protected $_name = [
        'uploadFileMaxSize' => 'UploadFileMaxSize',
        'uploadFileMaxSpeed' => 'UploadFileMaxSpeed',
        'uploadFileSuffixBlacklist' => 'UploadFileSuffixBlacklist',
        'virusFileUpload' => 'VirusFileUpload',
    ];

    public function validate()
    {
        if (\is_array($this->uploadFileSuffixBlacklist)) {
            Model::validateArray($this->uploadFileSuffixBlacklist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->uploadFileMaxSize) {
            $res['UploadFileMaxSize'] = $this->uploadFileMaxSize;
        }

        if (null !== $this->uploadFileMaxSpeed) {
            $res['UploadFileMaxSpeed'] = $this->uploadFileMaxSpeed;
        }

        if (null !== $this->uploadFileSuffixBlacklist) {
            if (\is_array($this->uploadFileSuffixBlacklist)) {
                $res['UploadFileSuffixBlacklist'] = [];
                $n1 = 0;
                foreach ($this->uploadFileSuffixBlacklist as $item1) {
                    $res['UploadFileSuffixBlacklist'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->virusFileUpload) {
            $res['VirusFileUpload'] = $this->virusFileUpload;
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
        if (isset($map['UploadFileMaxSize'])) {
            $model->uploadFileMaxSize = $map['UploadFileMaxSize'];
        }

        if (isset($map['UploadFileMaxSpeed'])) {
            $model->uploadFileMaxSpeed = $map['UploadFileMaxSpeed'];
        }

        if (isset($map['UploadFileSuffixBlacklist'])) {
            if (!empty($map['UploadFileSuffixBlacklist'])) {
                $model->uploadFileSuffixBlacklist = [];
                $n1 = 0;
                foreach ($map['UploadFileSuffixBlacklist'] as $item1) {
                    $model->uploadFileSuffixBlacklist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VirusFileUpload'])) {
            $model->virusFileUpload = $map['VirusFileUpload'];
        }

        return $model;
    }
}
