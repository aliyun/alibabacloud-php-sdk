<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class ApplyFileUploadLeaseRequest extends Model
{
    /**
     * @var string
     */
    public $categoryType;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $sizeInBytes;

    /**
     * @var bool
     */
    public $useInternalEndpoint;
    protected $_name = [
        'categoryType' => 'CategoryType',
        'fileName' => 'FileName',
        'md5' => 'Md5',
        'sizeInBytes' => 'SizeInBytes',
        'useInternalEndpoint' => 'UseInternalEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        if (null !== $this->sizeInBytes) {
            $res['SizeInBytes'] = $this->sizeInBytes;
        }

        if (null !== $this->useInternalEndpoint) {
            $res['UseInternalEndpoint'] = $this->useInternalEndpoint;
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
        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        if (isset($map['SizeInBytes'])) {
            $model->sizeInBytes = $map['SizeInBytes'];
        }

        if (isset($map['UseInternalEndpoint'])) {
            $model->useInternalEndpoint = $map['UseInternalEndpoint'];
        }

        return $model;
    }
}
