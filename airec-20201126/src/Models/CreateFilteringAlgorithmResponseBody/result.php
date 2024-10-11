<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\CreateFilteringAlgorithmResponseBody;

use AlibabaCloud\SDK\Airec\V20201126\Models\CreateFilteringAlgorithmResponseBody\result\meta;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The additional information.
     *
     * @example abc
     *
     * @var string
     */
    public $algorithmId;

    /**
     * @description The time when the filtering table was created. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in Coordinated Universal Time (UTC).
     *
     * @example 2018-12-07T02:24:26.000Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The fluctuation threshold for the data entries in the source table.
     *
     * @example 2018-12-07T02:24:26.000Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The threshold.
     *
     * @var meta
     */
    public $meta;

    /**
     * @description The name of the filtering algorithm.
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'algorithmId' => 'algorithmId',
        'gmtCreate'   => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'meta'        => 'meta',
        'status'      => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmId) {
            $res['algorithmId'] = $this->algorithmId;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->meta) {
            $res['meta'] = null !== $this->meta ? $this->meta->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['algorithmId'])) {
            $model->algorithmId = $map['algorithmId'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['meta'])) {
            $model->meta = meta::fromMap($map['meta']);
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
