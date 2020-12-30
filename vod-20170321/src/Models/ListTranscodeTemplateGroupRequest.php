<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListTranscodeTemplateGroupRequest extends Model
{
    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var string
     */
    public $appId;
    protected $_name = [
        'pageSize' => 'PageSize',
        'pageNo'   => 'PageNo',
        'appId'    => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTranscodeTemplateGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
