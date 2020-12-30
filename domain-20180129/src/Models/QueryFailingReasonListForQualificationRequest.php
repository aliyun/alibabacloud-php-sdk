<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryFailingReasonListForQualificationRequest extends Model
{
    /**
     * @var string
     */
    public $qualificationType;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $limit;
    protected $_name = [
        'qualificationType' => 'QualificationType',
        'userClientIp'      => 'UserClientIp',
        'lang'              => 'Lang',
        'instanceId'        => 'InstanceId',
        'limit'             => 'Limit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qualificationType) {
            $res['QualificationType'] = $this->qualificationType;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryFailingReasonListForQualificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QualificationType'])) {
            $model->qualificationType = $map['QualificationType'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        return $model;
    }
}
