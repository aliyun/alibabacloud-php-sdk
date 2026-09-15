<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source;

use AlibabaCloud\Dara\Model;

class sourceOSSParameters extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $delimiter;

    /**
     * @var string[]
     */
    public $fileExtensions;

    /**
     * @var string
     */
    public $loadFormat;

    /**
     * @var string
     */
    public $loadMode;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'bucketName' => 'BucketName',
        'delimiter' => 'Delimiter',
        'fileExtensions' => 'FileExtensions',
        'loadFormat' => 'LoadFormat',
        'loadMode' => 'LoadMode',
        'prefix' => 'Prefix',
        'roleName' => 'RoleName',
    ];

    public function validate()
    {
        if (\is_array($this->fileExtensions)) {
            Model::validateArray($this->fileExtensions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->delimiter) {
            $res['Delimiter'] = $this->delimiter;
        }

        if (null !== $this->fileExtensions) {
            if (\is_array($this->fileExtensions)) {
                $res['FileExtensions'] = [];
                $n1 = 0;
                foreach ($this->fileExtensions as $item1) {
                    $res['FileExtensions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->loadFormat) {
            $res['LoadFormat'] = $this->loadFormat;
        }

        if (null !== $this->loadMode) {
            $res['LoadMode'] = $this->loadMode;
        }

        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
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
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['Delimiter'])) {
            $model->delimiter = $map['Delimiter'];
        }

        if (isset($map['FileExtensions'])) {
            if (!empty($map['FileExtensions'])) {
                $model->fileExtensions = [];
                $n1 = 0;
                foreach ($map['FileExtensions'] as $item1) {
                    $model->fileExtensions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LoadFormat'])) {
            $model->loadFormat = $map['LoadFormat'];
        }

        if (isset($map['LoadMode'])) {
            $model->loadMode = $map['LoadMode'];
        }

        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
