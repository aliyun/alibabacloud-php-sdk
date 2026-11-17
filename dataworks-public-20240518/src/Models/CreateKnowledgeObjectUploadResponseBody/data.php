<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateKnowledgeObjectUploadResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $expiresAt;

    /**
     * @var string[]
     */
    public $requiredHeaders;

    /**
     * @var string
     */
    public $uploadId;

    /**
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'expiresAt' => 'ExpiresAt',
        'requiredHeaders' => 'RequiredHeaders',
        'uploadId' => 'UploadId',
        'uploadUrl' => 'UploadUrl',
    ];

    public function validate()
    {
        if (\is_array($this->requiredHeaders)) {
            Model::validateArray($this->requiredHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiresAt) {
            $res['ExpiresAt'] = $this->expiresAt;
        }

        if (null !== $this->requiredHeaders) {
            if (\is_array($this->requiredHeaders)) {
                $res['RequiredHeaders'] = [];
                foreach ($this->requiredHeaders as $key1 => $value1) {
                    $res['RequiredHeaders'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->uploadId) {
            $res['UploadId'] = $this->uploadId;
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
        if (isset($map['ExpiresAt'])) {
            $model->expiresAt = $map['ExpiresAt'];
        }

        if (isset($map['RequiredHeaders'])) {
            if (!empty($map['RequiredHeaders'])) {
                $model->requiredHeaders = [];
                foreach ($map['RequiredHeaders'] as $key1 => $value1) {
                    $model->requiredHeaders[$key1] = $value1;
                }
            }
        }

        if (isset($map['UploadId'])) {
            $model->uploadId = $map['UploadId'];
        }

        if (isset($map['UploadUrl'])) {
            $model->uploadUrl = $map['UploadUrl'];
        }

        return $model;
    }
}
