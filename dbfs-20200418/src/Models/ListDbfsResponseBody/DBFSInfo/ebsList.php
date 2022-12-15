<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsResponseBody\DBFSInfo;

use AlibabaCloud\Tea\Model;

class ebsList extends Model
{
    /**
     * @example d-bp1383******3uir001r
     *
     * @var string
     */
    public $ebsId;

    /**
     * @example 20
     *
     * @var int
     */
    public $sizeG;
    protected $_name = [
        'ebsId' => 'EbsId',
        'sizeG' => 'SizeG',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ebsId) {
            $res['EbsId'] = $this->ebsId;
        }
        if (null !== $this->sizeG) {
            $res['SizeG'] = $this->sizeG;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ebsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EbsId'])) {
            $model->ebsId = $map['EbsId'];
        }
        if (isset($map['SizeG'])) {
            $model->sizeG = $map['SizeG'];
        }

        return $model;
    }
}
