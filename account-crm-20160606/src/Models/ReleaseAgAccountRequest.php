<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class ReleaseAgAccountRequest extends Model
{
    /**
     * @var string
     */
    public $mpk;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var string
     */
    public $releaseReason;
    protected $_name = [
        'mpk' => 'Mpk',
        'pk' => 'Pk',
        'releaseReason' => 'ReleaseReason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mpk) {
            $res['Mpk'] = $this->mpk;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->releaseReason) {
            $res['ReleaseReason'] = $this->releaseReason;
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
        if (isset($map['Mpk'])) {
            $model->mpk = $map['Mpk'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['ReleaseReason'])) {
            $model->releaseReason = $map['ReleaseReason'];
        }

        return $model;
    }
}
