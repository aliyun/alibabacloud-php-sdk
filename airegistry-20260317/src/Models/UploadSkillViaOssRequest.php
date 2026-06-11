<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIRegistry\V20260317\Models;

use AlibabaCloud\Dara\Model;

class UploadSkillViaOssRequest extends Model
{
    /**
     * @var string
     */
    public $commitMsg;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $ossObjectName;

    /**
     * @var bool
     */
    public $overwrite;
    protected $_name = [
        'commitMsg' => 'CommitMsg',
        'namespaceId' => 'NamespaceId',
        'ossObjectName' => 'OssObjectName',
        'overwrite' => 'Overwrite',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commitMsg) {
            $res['CommitMsg'] = $this->commitMsg;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->ossObjectName) {
            $res['OssObjectName'] = $this->ossObjectName;
        }

        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
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
        if (isset($map['CommitMsg'])) {
            $model->commitMsg = $map['CommitMsg'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['OssObjectName'])) {
            $model->ossObjectName = $map['OssObjectName'];
        }

        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }

        return $model;
    }
}
