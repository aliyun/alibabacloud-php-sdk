<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTraceAppByNameRequest\tags;
use AlibabaCloud\Tea\Model;

class SearchTraceAppByNameRequest extends Model
{
    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The list of tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The name of the application.
     *
     * > If you do not specify this parameter, all application monitoring tasks in the specified region are queried.
     * @example test-app
     *
     * @var string
     */
    public $traceAppName;
    protected $_name = [
        'regionId'     => 'RegionId',
        'tags'         => 'Tags',
        'traceAppName' => 'TraceAppName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->traceAppName) {
            $res['TraceAppName'] = $this->traceAppName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchTraceAppByNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TraceAppName'])) {
            $model->traceAppName = $map['TraceAppName'];
        }

        return $model;
    }
}
