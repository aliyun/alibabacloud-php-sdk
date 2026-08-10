<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\InitAiAppScanResponseBody;

use AlibabaCloud\Dara\Model;

class authInfo extends Model
{
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $privateDomain;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $publicDomain;
    protected $_name = [
        'authToken' => 'AuthToken',
        'privateDomain' => 'PrivateDomain',
        'project' => 'Project',
        'publicDomain' => 'PublicDomain',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['AuthToken'] = $this->authToken;
        }

        if (null !== $this->privateDomain) {
            $res['PrivateDomain'] = $this->privateDomain;
        }

        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }

        if (null !== $this->publicDomain) {
            $res['PublicDomain'] = $this->publicDomain;
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
        if (isset($map['AuthToken'])) {
            $model->authToken = $map['AuthToken'];
        }

        if (isset($map['PrivateDomain'])) {
            $model->privateDomain = $map['PrivateDomain'];
        }

        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        if (isset($map['PublicDomain'])) {
            $model->publicDomain = $map['PublicDomain'];
        }

        return $model;
    }
}
