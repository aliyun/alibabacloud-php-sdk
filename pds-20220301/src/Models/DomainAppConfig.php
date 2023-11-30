<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

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
        'allowUploadFileCategoryList'  => 'allow_upload_file_category_list',
        'sameNameFileUploadMode'       => 'same_name_file_upload_mode',
        'singleFileUploadSizeLimit'    => 'single_file_upload_size_limit',
        'webClientDownloadMode'        => 'web_client_download_mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowUploadCustomFileExtList) {
            $res['allow_upload_custom_file_ext_list'] = $this->allowUploadCustomFileExtList;
        }
        if (null !== $this->allowUploadFileCategoryList) {
            $res['allow_upload_file_category_list'] = $this->allowUploadFileCategoryList;
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

    /**
     * @param array $map
     *
     * @return DomainAppConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allow_upload_custom_file_ext_list'])) {
            if (!empty($map['allow_upload_custom_file_ext_list'])) {
                $model->allowUploadCustomFileExtList = $map['allow_upload_custom_file_ext_list'];
            }
        }
        if (isset($map['allow_upload_file_category_list'])) {
            if (!empty($map['allow_upload_file_category_list'])) {
                $model->allowUploadFileCategoryList = $map['allow_upload_file_category_list'];
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
