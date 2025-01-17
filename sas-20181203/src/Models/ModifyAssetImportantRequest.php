<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyAssetImportantRequest extends Model
{
    /**
     * @var int
     */
    public $importantCode;
    /**
     * @var string
     */
    public $uuidList;
    protected $_name = [
        'importantCode' => 'ImportantCode',
        'uuidList'      => 'UuidList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->importantCode) {
            $res['ImportantCode'] = $this->importantCode;
        }

        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
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
        if (isset($map['ImportantCode'])) {
            $model->importantCode = $map['ImportantCode'];
        }

        if (isset($map['UuidList'])) {
            $model->uuidList = $map['UuidList'];
        }

        return $model;
    }
}
