<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class GetTextLogoListRequest extends Model
{
    /**
     * @var string
     */
    public $brandName;

    /**
     * @var string
     */
    public $fontId;
    protected $_name = [
        'brandName' => 'BrandName',
        'fontId'    => 'FontId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brandName) {
            $res['BrandName'] = $this->brandName;
        }
        if (null !== $this->fontId) {
            $res['FontId'] = $this->fontId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTextLogoListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BrandName'])) {
            $model->brandName = $map['BrandName'];
        }
        if (isset($map['FontId'])) {
            $model->fontId = $map['FontId'];
        }

        return $model;
    }
}
