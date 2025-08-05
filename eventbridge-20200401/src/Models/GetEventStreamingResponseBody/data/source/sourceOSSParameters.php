<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source;

use AlibabaCloud\Tea\Model;

class sourceOSSParameters extends Model
{
    /**
     * @example bucket_abc
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example \\n
     *
     * @var string
     */
    public $delimiter;

    /**
     * @example TextLoader
     *
     * @var string
     */
    public $loadFormat;

    /**
     * @example single
     *
     * @var string
     */
    public $loadMode;

    /**
     * @example fun/document/
     *
     * @var string
     */
    public $prefix;

    /**
     * @example eventbridge_oss_role
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'bucketName' => 'BucketName',
        'delimiter' => 'Delimiter',
        'loadFormat' => 'LoadFormat',
        'loadMode' => 'LoadMode',
        'prefix' => 'Prefix',
        'roleName' => 'RoleName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->delimiter) {
            $res['Delimiter'] = $this->delimiter;
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

    /**
     * @param array $map
     *
     * @return sourceOSSParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Delimiter'])) {
            $model->delimiter = $map['Delimiter'];
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
