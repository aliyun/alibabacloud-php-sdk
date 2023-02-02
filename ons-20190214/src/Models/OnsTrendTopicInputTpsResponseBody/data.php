<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTrendTopicInputTpsResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTrendTopicInputTpsResponseBody\data\records;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The data set that is returned based on each sampling period.
     *
     * @var records
     */
    public $records;

    /**
     * @description The name of the table that stores the data.
     *
     * @example MQ_INST_111111111111_DOxxxxxx%test trend of received messages
     *
     * @var string
     */
    public $title;

    /**
     * @description The unit of the timestamp. Unit: milliseconds.
     *
     * @example time
     *
     * @var string
     */
    public $XUnit;

    /**
     * @description The unit of the value of the Y parameter.
     *
     * @example msg
     *
     * @var string
     */
    public $YUnit;
    protected $_name = [
        'records' => 'Records',
        'title'   => 'Title',
        'XUnit'   => 'XUnit',
        'YUnit'   => 'YUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->records) {
            $res['Records'] = null !== $this->records ? $this->records->toMap() : null;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->XUnit) {
            $res['XUnit'] = $this->XUnit;
        }
        if (null !== $this->YUnit) {
            $res['YUnit'] = $this->YUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Records'])) {
            $model->records = records::fromMap($map['Records']);
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['XUnit'])) {
            $model->XUnit = $map['XUnit'];
        }
        if (isset($map['YUnit'])) {
            $model->YUnit = $map['YUnit'];
        }

        return $model;
    }
}
