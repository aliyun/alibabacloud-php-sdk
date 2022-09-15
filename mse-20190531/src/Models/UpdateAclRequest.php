<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateAclRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $aclEntryList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mseSessionId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'aclEntryList'   => 'AclEntryList',
        'instanceId'     => 'InstanceId',
        'mseSessionId'   => 'MseSessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->aclEntryList) {
            $res['AclEntryList'] = $this->aclEntryList;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mseSessionId) {
            $res['MseSessionId'] = $this->mseSessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAclRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AclEntryList'])) {
            $model->aclEntryList = $map['AclEntryList'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MseSessionId'])) {
            $model->mseSessionId = $map['MseSessionId'];
        }

        return $model;
    }
}
