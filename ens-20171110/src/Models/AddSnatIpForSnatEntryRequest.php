<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class AddSnatIpForSnatEntryRequest extends Model
{
    /**
     * @var string
     */
    public $snatEntryId;

    /**
     * @var string
     */
    public $snatIp;
    protected $_name = [
        'snatEntryId' => 'SnatEntryId',
        'snatIp' => 'SnatIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->snatEntryId) {
            $res['SnatEntryId'] = $this->snatEntryId;
        }

        if (null !== $this->snatIp) {
            $res['SnatIp'] = $this->snatIp;
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
        if (isset($map['SnatEntryId'])) {
            $model->snatEntryId = $map['SnatEntryId'];
        }

        if (isset($map['SnatIp'])) {
            $model->snatIp = $map['SnatIp'];
        }

        return $model;
    }
}
