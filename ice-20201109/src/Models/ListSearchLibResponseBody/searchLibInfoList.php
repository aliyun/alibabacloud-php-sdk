<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListSearchLibResponseBody;

use AlibabaCloud\Tea\Model;

class searchLibInfoList extends Model
{
    /**
     * @example faceSearchLib
     *
     * @var string
     */
    public $searchLibName;

    /**
     * @example normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'searchLibName' => 'SearchLibName',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchLibInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
