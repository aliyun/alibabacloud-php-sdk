<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcNegativeQualityPunishmentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example -
     *
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $entName;

    /**
     * @example -
     *
     * @var string
     */
    public $eventDate;

    /**
     * @example -
     *
     * @var string
     */
    public $eventResult;

    /**
     * @example -
     *
     * @var string
     */
    public $pubDate;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'department'  => 'Department',
        'entName'     => 'EntName',
        'eventDate'   => 'EventDate',
        'eventResult' => 'EventResult',
        'pubDate'     => 'PubDate',
        'title'       => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->eventDate) {
            $res['EventDate'] = $this->eventDate;
        }
        if (null !== $this->eventResult) {
            $res['EventResult'] = $this->eventResult;
        }
        if (null !== $this->pubDate) {
            $res['PubDate'] = $this->pubDate;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['EventDate'])) {
            $model->eventDate = $map['EventDate'];
        }
        if (isset($map['EventResult'])) {
            $model->eventResult = $map['EventResult'];
        }
        if (isset($map['PubDate'])) {
            $model->pubDate = $map['PubDate'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
