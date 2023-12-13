<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribeEmptyNumberResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The specified phone number.
     *
     * @example 189****1234
     *
     * @var string
     */
    public $number;

    /**
     * @description The returned status for the queried phone number. Valid values:
     *
     *   **EMPTY**: The queried phone number is a nonexistent number.
     *   **NORMAL**: The queried phone number is valid.
     *   **SUSPECT_EMPTY**: The queried phone number is suspected to be a nonexistent number.
     *   **UNKNOWN**: The queried phone number is unknown.
     *
     * @example EMPTY
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'number' => 'Number',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
