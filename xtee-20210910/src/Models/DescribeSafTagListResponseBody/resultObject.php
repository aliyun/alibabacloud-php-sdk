<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafTagListResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $tagDesc;

    /**
     * @var string
     */
    public $tagMean;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $tagState;

    /**
     * @var string
     */
    public $tagType;

    /**
     * @var string
     */
    public $tagUid;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'tagDesc' => 'tagDesc',
        'tagMean' => 'tagMean',
        'tagName' => 'tagName',
        'tagState' => 'tagState',
        'tagType' => 'tagType',
        'tagUid' => 'tagUid',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagDesc) {
            $res['tagDesc'] = $this->tagDesc;
        }

        if (null !== $this->tagMean) {
            $res['tagMean'] = $this->tagMean;
        }

        if (null !== $this->tagName) {
            $res['tagName'] = $this->tagName;
        }

        if (null !== $this->tagState) {
            $res['tagState'] = $this->tagState;
        }

        if (null !== $this->tagType) {
            $res['tagType'] = $this->tagType;
        }

        if (null !== $this->tagUid) {
            $res['tagUid'] = $this->tagUid;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tagDesc'])) {
            $model->tagDesc = $map['tagDesc'];
        }

        if (isset($map['tagMean'])) {
            $model->tagMean = $map['tagMean'];
        }

        if (isset($map['tagName'])) {
            $model->tagName = $map['tagName'];
        }

        if (isset($map['tagState'])) {
            $model->tagState = $map['tagState'];
        }

        if (isset($map['tagType'])) {
            $model->tagType = $map['tagType'];
        }

        if (isset($map['tagUid'])) {
            $model->tagUid = $map['tagUid'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
