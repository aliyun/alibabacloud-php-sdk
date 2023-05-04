<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class ListFCTriggerRequest extends Model
{
    /**
     * @description The name of the event. You can specify only one name.
     *
     * @example LogFileCreated
     *
     * @var string
     */
    public $eventMetaName;

    /**
     * @description The version number of the event. You can specify only one version number.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $eventMetaVersion;
    protected $_name = [
        'eventMetaName'    => 'EventMetaName',
        'eventMetaVersion' => 'EventMetaVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventMetaName) {
            $res['EventMetaName'] = $this->eventMetaName;
        }
        if (null !== $this->eventMetaVersion) {
            $res['EventMetaVersion'] = $this->eventMetaVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFCTriggerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventMetaName'])) {
            $model->eventMetaName = $map['EventMetaName'];
        }
        if (isset($map['EventMetaVersion'])) {
            $model->eventMetaVersion = $map['EventMetaVersion'];
        }

        return $model;
    }
}
