<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateBoardRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $boardData;
    protected $_name = [
        'appId'     => 'AppId',
        'boardData' => 'BoardData',
    ];

    public function validate()
    {
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('boardData', $this->boardData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->boardData) {
            $res['BoardData'] = $this->boardData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBoardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BoardData'])) {
            $model->boardData = $map['BoardData'];
        }

        return $model;
    }
}
