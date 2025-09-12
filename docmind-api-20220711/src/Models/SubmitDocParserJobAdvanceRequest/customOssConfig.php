<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocParserJobAdvanceRequest;

use AlibabaCloud\Dara\Model;

class customOssConfig extends Model
{
    /**
     * @var string
     */
    public $accessId;

    /**
     * @var string
     */
    public $accessKeySecret;

    /**
     * @var string
     */
    public $stsToken;
    protected $_name = [
        'accessId' => 'AccessId',
        'accessKeySecret' => 'AccessKeySecret',
        'stsToken' => 'StsToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }

        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
        }

        if (null !== $this->stsToken) {
            $res['StsToken'] = $this->stsToken;
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
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }

        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }

        if (isset($map['StsToken'])) {
            $model->stsToken = $map['StsToken'];
        }

        return $model;
    }
}
