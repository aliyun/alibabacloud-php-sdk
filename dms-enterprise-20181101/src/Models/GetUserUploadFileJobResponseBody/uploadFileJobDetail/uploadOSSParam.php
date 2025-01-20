<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserUploadFileJobResponseBody\uploadFileJobDetail;

use AlibabaCloud\Dara\Model;

class uploadOSSParam extends Model
{
    /**
     * @var string
     */
    public $bucketName;
    /**
     * @var string
     */
    public $endpoint;
    /**
     * @var string
     */
    public $objectName;
    protected $_name = [
        'bucketName' => 'BucketName',
        'endpoint'   => 'Endpoint',
        'objectName' => 'ObjectName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
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

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }

        return $model;
    }
}
