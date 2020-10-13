<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetAllMarketsResponse\dataList;

use AlibabaCloud\Tea\Model;

class usageData extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $marketCode;

    /**
     * @var string
     */
    public $marketName;
    protected $_name = [
        'code'       => 'Code',
        'marketCode' => 'MarketCode',
        'marketName' => 'MarketName',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('marketCode', $this->marketCode, true);
        Model::validateRequired('marketName', $this->marketName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->marketCode) {
            $res['MarketCode'] = $this->marketCode;
        }
        if (null !== $this->marketName) {
            $res['MarketName'] = $this->marketName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['MarketCode'])) {
            $model->marketCode = $map['MarketCode'];
        }
        if (isset($map['MarketName'])) {
            $model->marketName = $map['MarketName'];
        }

        return $model;
    }
}
