<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DescribeRegionsRequest extends Model
{
    /**
     * @description The display language of the console. Valid values:
     *
     *   cn: Simplified Chinese
     *   en: English
     *
     * @example en
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The sales mode.
     *
     * Valid values:
     *
     *   Instance: the instance group mode. [Default]
     *   Node: the matrix mode. [Whitelist required]
     *
     * @example Instance
     *
     * @var string
     */
    public $saleMode;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'saleMode'       => 'SaleMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->saleMode) {
            $res['SaleMode'] = $this->saleMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRegionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['SaleMode'])) {
            $model->saleMode = $map['SaleMode'];
        }

        return $model;
    }
}
