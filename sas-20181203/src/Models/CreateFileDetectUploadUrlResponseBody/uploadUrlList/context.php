<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateFileDetectUploadUrlResponseBody\uploadUrlList;

use AlibabaCloud\Tea\Model;

class context extends Model
{
    /**
     * @description The AccessKey ID that is used to access the OSS bucket.
     *
     * @example LTAI4G1mgPbjvGQuiV1X****
     *
     * @var string
     */
    public $accessId;

    /**
     * @description The key of the file that is used after the file is uploaded to the OSS bucket.
     *
     * @example 1/2022/06/23/15/41/16559701077444693a0c6-33b2-4cc2-a99f-9f38b8b8****
     *
     * @var string
     */
    public $ossKey;

    /**
     * @description The policy that poses limits on file upload. For example, the policy can limit the size of the file.
     *
     * @example eyJleHBpcmF0aW9uIjoiMjAyMi0wNy0yM1QxMDo1ODoxMC43NTNaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsMjA5NzE1MjBdLFsiZXEiLCIka2V5IiwiMS8yMDIyLzA2LzIzLzE4LzU4LzE2NTU5ODE4OTA3NTM4NTc2MjFkNS1kN2E1LTQ5YzAtOGJjZi0yMTMyY2JiYTdmYzMi****
     *
     * @var string
     */
    public $policy;

    /**
     * @description The signature that is used to upload the file.
     *
     * @example wDhPgVdnY/bkKFYcYFl+4crl****
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'accessId'  => 'AccessId',
        'ossKey'    => 'OssKey',
        'policy'    => 'Policy',
        'signature' => 'Signature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return context
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
