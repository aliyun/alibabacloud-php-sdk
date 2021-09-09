<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDiagnoseReportResponseBody\result\diagnoseItems;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $suggest;
    protected $_name = [
        'type'    => 'type',
        'name'    => 'name',
        'desc'    => 'desc',
        'result'  => 'result',
        'suggest' => 'suggest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->suggest) {
            $res['suggest'] = $this->suggest;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['suggest'])) {
            $model->suggest = $map['suggest'];
        }

        return $model;
    }
}
