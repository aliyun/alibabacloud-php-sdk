<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartStreamingOutRequest;

use AlibabaCloud\Tea\Model;

class layoutSpecifiedUsers extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $ids;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'ids' => 'Ids',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layoutSpecifiedUsers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            if (!empty($map['Ids'])) {
                $model->ids = $map['Ids'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
