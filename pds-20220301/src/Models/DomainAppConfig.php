<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class DomainAppConfig extends Model
{
    /**
     * @var string[]
     */
    public $allowUploadCustomFileExtList;

    /**
     * @var string[]
     */
    public $allowUploadFileCategoryList;

    /**
     * @var string
     */
    public $sameNameFileUploadMode;

    /**
     * @var int
     */
    public $singleFileUploadSizeLimit;

    /**
     * @var string
     */
    public $webClientDownloadMode;
    protected $_name = [
        'allowUploadCustomFileExtList' => 'allow_upload_custom_file_ext_list',
        'allowUploadFileCategoryList' => 'allow_upload_file_category_list',
        'sameNameFileUploadMode' => 'same_name_file_upload_mode',
        'singleFileUploadSizeLimit' => 'single_file_upload_size_limit',
        'webClientDownloadMode' => 'web_client_download_mode',
    ];

    public function validate()
    {
        if (\is_array($this->allowUploadCustomFileExtList)) {
            Model::validateArray($this->allowUploadCustomFileExtList);
        }
        if (\is_array($this->allowUploadFileCategoryList)) {
            Model::validateArray($this->allowUploadFileCategoryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowUploadCustomFileExtList) {
            if (\is_array($this->allowUploadCustomFileExtList)) {
                $res['allow_upload_custom_file_ext_list'] = [];
                $n1 = 0;
                foreach ($this->allowUploadCustomFileExtList as $item1) {
                    $res['allow_upload_custom_file_ext_list'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->allowUploadFileCategoryList) {
            if (\is_array($this->allowUploadFileCategoryList)) {
                $res['allow_upload_file_category_list'] = [];
                $n1 = 0;
                foreach ($this->allowUploadFileCategoryList as $item1) {
                    $res['allow_upload_file_category_list'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sameNameFileUploadMode) {
            $res['same_name_file_upload_mode'] = $this->sameNameFileUploadMode;
        }

        if (null !== $this->singleFileUploadSizeLimit) {
            $res['single_file_upload_size_limit'] = $this->singleFileUploadSizeLimit;
        }

        if (null !== $this->webClientDownloadMode) {
            $res['web_client_download_mode'] = $this->webClientDownloadMode;
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
        if (isset($map['allow_upload_custom_file_ext_list'])) {
            if (!empty($map['allow_upload_custom_file_ext_list'])) {
                $model->allowUploadCustomFileExtList = [];
                $n1 = 0;
                foreach ($map['allow_upload_custom_file_ext_list'] as $item1) {
                    $model->allowUploadCustomFileExtList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['allow_upload_file_category_list'])) {
            if (!empty($map['allow_upload_file_category_list'])) {
                $model->allowUploadFileCategoryList = [];
                $n1 = 0;
                foreach ($map['allow_upload_file_category_list'] as $item1) {
                    $model->allowUploadFileCategoryList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['same_name_file_upload_mode'])) {
            $model->sameNameFileUploadMode = $map['same_name_file_upload_mode'];
        }

        if (isset($map['single_file_upload_size_limit'])) {
            $model->singleFileUploadSizeLimit = $map['single_file_upload_size_limit'];
        }

        if (isset($map['web_client_download_mode'])) {
            $model->webClientDownloadMode = $map['web_client_download_mode'];
        }

        return $model;
    }
}
