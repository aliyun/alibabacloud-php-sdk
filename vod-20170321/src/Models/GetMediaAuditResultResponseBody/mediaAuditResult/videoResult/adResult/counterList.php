<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\videoResult\adResult;

use AlibabaCloud\Tea\Model;

class counterList extends Model
{
    /**
     * @description The statistics about tag frames.
     *
     * @example 12
     *
     * @var int
     */
    public $count;

    /**
     * @description The average score of the review results.
     *
     * @example ad
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
