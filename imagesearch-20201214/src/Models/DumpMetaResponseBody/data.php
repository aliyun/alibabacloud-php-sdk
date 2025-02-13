<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\DumpMetaResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dumpMetaStatus;
    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'dumpMetaStatus' => 'DumpMetaStatus',
        'id'             => 'Id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dumpMetaStatus) {
            $res['DumpMetaStatus'] = $this->dumpMetaStatus;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['DumpMetaStatus'])) {
            $model->dumpMetaStatus = $map['DumpMetaStatus'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
