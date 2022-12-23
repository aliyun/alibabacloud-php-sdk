<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\videoResult\terrorismResult;

use AlibabaCloud\Tea\Model;

class counterList extends Model
{
    /**
     * @description The number of frames.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The category of the review result. Valid values:
     *
     * - **normal**
     * - **bloody**
     * - **explosion**
     * - **outfit**
     * - **logo**
     * - **weapon**
     * - **politics**
     * - **violence**
     * - **crowd**
     * - **parade**
     * - **carcrash**
     * - **flag**
     * - **location**
     * - **others**
     * @example outfit
     *
     * @var string
     */
    public $label;
    protected $_name = [
        'count' => 'Count',
        'label' => 'Label',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return counterList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}
