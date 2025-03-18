<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocQaResponseBody\payload\output\mediaUrlList;

use AlibabaCloud\Tea\Model;

class clipInfos extends Model
{
    /**
     * @example 0
     *
     * @var float
     */
    public $from;

    /**
     * @example 30
     *
     * @var float
     */
    public $to;
    protected $_name = [
        'from' => 'From',
        'to' => 'To',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clipInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
