<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class BusinessLicenseOcrRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var string
     */
    public $fileInfo;

    /**
     * @var string
     */
    public $fileStoreType;
    protected $_name = [
        'lang'          => 'Lang',
        'bizCode'       => 'BizCode',
        'fileInfo'      => 'FileInfo',
        'fileStoreType' => 'FileStoreType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->fileInfo) {
            $res['FileInfo'] = $this->fileInfo;
        }
        if (null !== $this->fileStoreType) {
            $res['FileStoreType'] = $this->fileStoreType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BusinessLicenseOcrRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['FileInfo'])) {
            $model->fileInfo = $map['FileInfo'];
        }
        if (isset($map['FileStoreType'])) {
            $model->fileStoreType = $map['FileStoreType'];
        }

        return $model;
    }
}
