<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListDiagnoseReportIdsRequest extends Model
{
    /**
     * @example 1595174399999
     *
     * @var int
     */
    public $endTime;

    /**
     * @example spanish
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 15
     *
     * @var int
     */
    public $size;

    /**
     * @example 1595088000000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example SYSTEM
     *
     * @var string
     */
    public $trigger;
    protected $_name = [
        'endTime'   => 'endTime',
        'lang'      => 'lang',
        'page'      => 'page',
        'size'      => 'size',
        'startTime' => 'startTime',
        'trigger'   => 'trigger',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->trigger) {
            $res['trigger'] = $this->trigger;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDiagnoseReportIdsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['trigger'])) {
            $model->trigger = $map['trigger'];
        }

        return $model;
    }
}
