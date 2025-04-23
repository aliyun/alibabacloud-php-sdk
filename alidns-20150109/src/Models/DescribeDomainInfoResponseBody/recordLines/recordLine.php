<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponseBody\recordLines;

use AlibabaCloud\Dara\Model;

class recordLine extends Model
{
    /**
     * @var string
     */
    public $fatherCode;

    /**
     * @var string
     */
    public $lineCode;

    /**
     * @var string
     */
    public $lineDisplayName;

    /**
     * @var string
     */
    public $lineName;
    protected $_name = [
        'fatherCode' => 'FatherCode',
        'lineCode' => 'LineCode',
        'lineDisplayName' => 'LineDisplayName',
        'lineName' => 'LineName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fatherCode) {
            $res['FatherCode'] = $this->fatherCode;
        }

        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
        }

        if (null !== $this->lineDisplayName) {
            $res['LineDisplayName'] = $this->lineDisplayName;
        }

        if (null !== $this->lineName) {
            $res['LineName'] = $this->lineName;
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
        if (isset($map['FatherCode'])) {
            $model->fatherCode = $map['FatherCode'];
        }

        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
        }

        if (isset($map['LineDisplayName'])) {
            $model->lineDisplayName = $map['LineDisplayName'];
        }

        if (isset($map['LineName'])) {
            $model->lineName = $map['LineName'];
        }

        return $model;
    }
}
