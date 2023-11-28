<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListDiagnoseReportRequest extends Model
{
    /**
     * @description SYSTEM
     *
     * @example true
     *
     * @var bool
     */
    public $detail;

    /**
     * @description 1
     *
     * @example 1595174399999
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 1594569600000
     *
     * @example spanish
     *
     * @var string
     */
    public $lang;

    /**
     * @description 20
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description true
     *
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description 1595174399999
     *
     * @example 1594569600000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The ID of the request.
     *
     * @example SYSTEM
     *
     * @var string
     */
    public $trigger;
    protected $_name = [
        'detail'    => 'detail',
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
        if (null !== $this->detail) {
            $res['detail'] = $this->detail;
        }
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
     * @return ListDiagnoseReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['detail'])) {
            $model->detail = $map['detail'];
        }
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
