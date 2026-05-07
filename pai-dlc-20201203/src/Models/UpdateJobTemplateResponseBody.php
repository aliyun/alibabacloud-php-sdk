<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class UpdateJobTemplateResponseBody extends Model
{
    /**
     * @var int
     */
    public $defaultVersion;

    /**
     * @var string
     */
    public $gmtModifyTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $version;

    /**
     * @var bool
     */
    public $versionCreated;
    protected $_name = [
        'defaultVersion' => 'DefaultVersion',
        'gmtModifyTime' => 'GmtModifyTime',
        'requestId' => 'RequestId',
        'version' => 'Version',
        'versionCreated' => 'VersionCreated',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultVersion) {
            $res['DefaultVersion'] = $this->defaultVersion;
        }

        if (null !== $this->gmtModifyTime) {
            $res['GmtModifyTime'] = $this->gmtModifyTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->versionCreated) {
            $res['VersionCreated'] = $this->versionCreated;
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
        if (isset($map['DefaultVersion'])) {
            $model->defaultVersion = $map['DefaultVersion'];
        }

        if (isset($map['GmtModifyTime'])) {
            $model->gmtModifyTime = $map['GmtModifyTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VersionCreated'])) {
            $model->versionCreated = $map['VersionCreated'];
        }

        return $model;
    }
}
