<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTableResponseBody\data\simpleNodeInfos;

use AlibabaCloud\Dara\Model;

class bizUnit extends Model
{
    /**
     * @var string
     */
    public $bizUnitDisplayName;

    /**
     * @var string
     */
    public $bizUnitId;

    /**
     * @var string
     */
    public $bizUnitName;
    protected $_name = [
        'bizUnitDisplayName' => 'BizUnitDisplayName',
        'bizUnitId' => 'BizUnitId',
        'bizUnitName' => 'BizUnitName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnitDisplayName) {
            $res['BizUnitDisplayName'] = $this->bizUnitDisplayName;
        }

        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }

        if (null !== $this->bizUnitName) {
            $res['BizUnitName'] = $this->bizUnitName;
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
        if (isset($map['BizUnitDisplayName'])) {
            $model->bizUnitDisplayName = $map['BizUnitDisplayName'];
        }

        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }

        if (isset($map['BizUnitName'])) {
            $model->bizUnitName = $map['BizUnitName'];
        }

        return $model;
    }
}
