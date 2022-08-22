<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubAlbumResponseBody\result;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubAlbumResponseBody\result\dataList\scheduleInfo;
use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $albumId;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isAdded;

    /**
     * @var scheduleInfo
     */
    public $scheduleInfo;

    /**
     * @var int
     */
    public $sequence;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $totalEpisode;
    protected $_name = [
        'albumId'      => 'AlbumId',
        'categoryId'   => 'CategoryId',
        'coverUrl'     => 'CoverUrl',
        'id'           => 'Id',
        'isAdded'      => 'IsAdded',
        'scheduleInfo' => 'ScheduleInfo',
        'sequence'     => 'Sequence',
        'title'        => 'Title',
        'totalEpisode' => 'TotalEpisode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->albumId) {
            $res['AlbumId'] = $this->albumId;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isAdded) {
            $res['IsAdded'] = $this->isAdded;
        }
        if (null !== $this->scheduleInfo) {
            $res['ScheduleInfo'] = null !== $this->scheduleInfo ? $this->scheduleInfo->toMap() : null;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->totalEpisode) {
            $res['TotalEpisode'] = $this->totalEpisode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbumId'])) {
            $model->albumId = $map['AlbumId'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsAdded'])) {
            $model->isAdded = $map['IsAdded'];
        }
        if (isset($map['ScheduleInfo'])) {
            $model->scheduleInfo = scheduleInfo::fromMap($map['ScheduleInfo']);
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['TotalEpisode'])) {
            $model->totalEpisode = $map['TotalEpisode'];
        }

        return $model;
    }
}
