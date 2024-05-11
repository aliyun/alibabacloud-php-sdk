<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetDRMLicenseRequest extends Model
{
    /**
     * @example AESzB8SQgpACioSEJ3yqiFwruAOUgIvlCx*****
     *
     * @var string
     */
    public $keyId;

    /**
     * @example http://1111111111.mns.cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $notifyEndpoint;

    /**
     * @example topic1
     *
     * @var string
     */
    public $notifyTopicName;

    /**
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example widevine
     *
     * @var string
     */
    public $protectionSystem;
    protected $_name = [
        'keyId'            => 'KeyId',
        'notifyEndpoint'   => 'NotifyEndpoint',
        'notifyTopicName'  => 'NotifyTopicName',
        'projectName'      => 'ProjectName',
        'protectionSystem' => 'ProtectionSystem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->protectionSystem) {
            $res['ProtectionSystem'] = $this->protectionSystem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDRMLicenseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProtectionSystem'])) {
            $model->protectionSystem = $map['ProtectionSystem'];
        }

        return $model;
    }
}
