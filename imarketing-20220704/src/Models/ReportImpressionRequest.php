<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class ReportImpressionRequest extends Model
{
    /**
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
