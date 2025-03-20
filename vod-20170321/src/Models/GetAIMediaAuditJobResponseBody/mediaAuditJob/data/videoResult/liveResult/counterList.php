<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\liveResult;

use AlibabaCloud\Tea\Model;

class counterList extends Model
{
    /**
     * @description The number of video snapshots.
     *
     * @example 0
     *
     * @var int
     */
    public $count;

    /**
     * @description The category of the review result. Valid values:
     *
     *   **normal**: normal content
     *   **meaningless**: meaningless content, such as a black or white screen.
     *   **PIP**: picture-in-picture
     *   **smoking**: smoking
     *   **drivelive**: live broadcasting in a running vehicle
     *
     * @example live
     *
     * @var string
     */
    public $label;
    protected $_name = [
        'count' => 'Count',
        'label' => 'Label',
    ];

    public function validate() {}

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
