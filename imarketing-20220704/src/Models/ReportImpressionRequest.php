<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class ReportImpressionRequest extends Model
{
    /**
     * @description impressionlink
     *
     * @example 2cdf86c6c3cd7947a450ea3e9031b9ecbf8921389a9fcf96e575276400c70991b6268ab8c154bd3c638eaf58336c1cde72239c7134a3fe0f8d692ff924e2460d26c35fb0cf8f98cde03f8380b50e442f9af83ab7ba7013dd69c69d4993af8993237b1d1aae4262b4acd66be7b561720bd24a4f4715d93987e434e198c8a99286bf04a56389893336ce96680e5198b34ef32579d2d0e2e261c10ae651642d
     *
     * @var string
     */
    public $impressionlink;
    protected $_name = [
        'impressionlink' => 'Impressionlink',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->impressionlink) {
            $res['Impressionlink'] = $this->impressionlink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportImpressionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Impressionlink'])) {
            $model->impressionlink = $map['Impressionlink'];
        }

        return $model;
    }
}
