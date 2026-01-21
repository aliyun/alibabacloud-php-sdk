<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bsn\V20150512\Models;

use AlibabaCloud\Dara\Model;

class GrantBsnCodeResponseBody extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $grantToAliuid;

    /**
     * @var string
     */
    public $notes;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sn;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'aliUid' => 'AliUid',
        'grantToAliuid' => 'GrantToAliuid',
        'notes' => 'Notes',
        'requestId' => 'RequestId',
        'sn' => 'Sn',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->grantToAliuid) {
            $res['GrantToAliuid'] = $this->grantToAliuid;
        }

        if (null !== $this->notes) {
            $res['Notes'] = $this->notes;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['GrantToAliuid'])) {
            $model->grantToAliuid = $map['GrantToAliuid'];
        }

        if (isset($map['Notes'])) {
            $model->notes = $map['Notes'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
