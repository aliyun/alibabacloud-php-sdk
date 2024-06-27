<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class UpdateAuditRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $auditMsg;

    /**
     * @var string
     */
    public $auditRelationType;

    /**
     * @var string
     */
    public $auditStatus;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'lang'              => 'Lang',
        'auditMsg'          => 'auditMsg',
        'auditRelationType' => 'auditRelationType',
        'auditStatus'       => 'auditStatus',
        'id'                => 'id',
        'regId'             => 'regId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->auditMsg) {
            $res['auditMsg'] = $this->auditMsg;
        }
        if (null !== $this->auditRelationType) {
            $res['auditRelationType'] = $this->auditRelationType;
        }
        if (null !== $this->auditStatus) {
            $res['auditStatus'] = $this->auditStatus;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAuditRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['auditMsg'])) {
            $model->auditMsg = $map['auditMsg'];
        }
        if (isset($map['auditRelationType'])) {
            $model->auditRelationType = $map['auditRelationType'];
        }
        if (isset($map['auditStatus'])) {
            $model->auditStatus = $map['auditStatus'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        return $model;
    }
}
