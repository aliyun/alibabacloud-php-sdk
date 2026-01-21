<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bsn\V20150512\Models;

use AlibabaCloud\Dara\Model;

class GrantBsnCodeRequest extends Model
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
    public $sn;
    protected $_name = [
        'aliUid' => 'AliUid',
        'grantToAliuid' => 'GrantToAliuid',
        'notes' => 'Notes',
        'sn' => 'Sn',
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

        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
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

        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }

        return $model;
    }
}
