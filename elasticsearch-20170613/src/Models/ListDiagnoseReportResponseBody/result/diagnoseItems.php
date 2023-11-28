<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDiagnoseReportResponseBody\result;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDiagnoseReportResponseBody\result\diagnoseItems\detail;
use AlibabaCloud\Tea\Model;

class diagnoseItems extends Model
{
    /**
     * @description The type of the diagnostic result. Valid values:
     *
     *   TEXT: text description
     *   CONSOLE_API: console-triggered
     *   ES_API: API triggered
     *
     * @var detail
     */
    public $detail;

    /**
     * @description The details of the diagnostic item.
     *
     * @example YELLOW
     *
     * @var string
     */
    public $health;

    /**
     * @description The health of the diagnostic item. Supported: GREEN, YELLOW, RED, and UNKNOWN.
     *
     * @example IndexAliasUseDiagnostic
     *
     * @var string
     */
    public $item;
    protected $_name = [
        'detail' => 'detail',
        'health' => 'health',
        'item'   => 'item',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }
        if (null !== $this->health) {
            $res['health'] = $this->health;
        }
        if (null !== $this->item) {
            $res['item'] = $this->item;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnoseItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['detail'])) {
            $model->detail = detail::fromMap($map['detail']);
        }
        if (isset($map['health'])) {
            $model->health = $map['health'];
        }
        if (isset($map['item'])) {
            $model->item = $map['item'];
        }

        return $model;
    }
}
