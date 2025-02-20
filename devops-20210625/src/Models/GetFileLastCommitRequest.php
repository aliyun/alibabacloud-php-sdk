<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class GetFileLastCommitRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;
    /**
     * @var string
     */
    public $filePath;
    /**
     * @var string
     */
    public $organizationId;
    /**
     * @var string
     */
    public $sha;
    /**
     * @var bool
     */
    public $showSignature;
    protected $_name = [
        'accessToken'    => 'accessToken',
        'filePath'       => 'filePath',
        'organizationId' => 'organizationId',
        'sha'            => 'sha',
        'showSignature'  => 'showSignature',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }

        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->sha) {
            $res['sha'] = $this->sha;
        }

        if (null !== $this->showSignature) {
            $res['showSignature'] = $this->showSignature;
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
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }

        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['sha'])) {
            $model->sha = $map['sha'];
        }

        if (isset($map['showSignature'])) {
            $model->showSignature = $map['showSignature'];
        }

        return $model;
    }
}
