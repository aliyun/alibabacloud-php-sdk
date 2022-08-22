<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListMusicRequest;

use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $musicId;

    /**
     * @var string
     */
    public $musicName;

    /**
     * @var int
     */
    public $musicType;

    /**
     * @var string
     */
    public $musicTypeName;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'musicId'       => 'MusicId',
        'musicName'     => 'MusicName',
        'musicType'     => 'MusicType',
        'musicTypeName' => 'MusicTypeName',
        'pageSize'      => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->musicId) {
            $res['MusicId'] = $this->musicId;
        }
        if (null !== $this->musicName) {
            $res['MusicName'] = $this->musicName;
        }
        if (null !== $this->musicType) {
            $res['MusicType'] = $this->musicType;
        }
        if (null !== $this->musicTypeName) {
            $res['MusicTypeName'] = $this->musicTypeName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['MusicId'])) {
            $model->musicId = $map['MusicId'];
        }
        if (isset($map['MusicName'])) {
            $model->musicName = $map['MusicName'];
        }
        if (isset($map['MusicType'])) {
            $model->musicType = $map['MusicType'];
        }
        if (isset($map['MusicTypeName'])) {
            $model->musicTypeName = $map['MusicTypeName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
