<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UploadAgentSessionFileResponseBody\jsonRpcResponse;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UploadAgentSessionFileResponseBody\jsonRpcResponse\result\signature;

class result extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $relativePath;

    /**
     * @var signature
     */
    public $signature;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $uploadId;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
        'relativePath' => 'RelativePath',
        'signature' => 'Signature',
        'size' => 'Size',
        'uploadId' => 'UploadId',
    ];

    public function validate()
    {
        if (null !== $this->signature) {
            $this->signature->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->relativePath) {
            $res['RelativePath'] = $this->relativePath;
        }

        if (null !== $this->signature) {
            $res['Signature'] = null !== $this->signature ? $this->signature->toArray($noStream) : $this->signature;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->uploadId) {
            $res['UploadId'] = $this->uploadId;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RelativePath'])) {
            $model->relativePath = $map['RelativePath'];
        }

        if (isset($map['Signature'])) {
            $model->signature = signature::fromMap($map['Signature']);
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['UploadId'])) {
            $model->uploadId = $map['UploadId'];
        }

        return $model;
    }
}
