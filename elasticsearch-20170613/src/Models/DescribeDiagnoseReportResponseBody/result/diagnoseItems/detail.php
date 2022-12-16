<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeDiagnoseReportResponseBody\result\diagnoseItems;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @example Check whether the number of replica shards is optimal and easy to maintain
     *
     * @var string
     */
    public $desc;

    /**
     * @example Number of Replica Shards
     *
     * @var string
     */
    public $name;

    /**
     * @example You may need to adjust the numbers of replica shards of some indices as follows: [geoname08 : 0 -&gt; 1][geoname09 : 0 -&gt; 1][geonametest01 : 0 -&gt; 1]
     *
     * @var string
     */
    public $result;

    /**
     * @example You can call the following function in the Elasticsearch API....
     *
     * @var string
     */
    public $suggest;

    /**
     * @example ES_API
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'desc'    => 'desc',
        'name'    => 'name',
        'result'  => 'result',
        'suggest' => 'suggest',
        'type'    => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->suggest) {
            $res['suggest'] = $this->suggest;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['suggest'])) {
            $model->suggest = $map['suggest'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
