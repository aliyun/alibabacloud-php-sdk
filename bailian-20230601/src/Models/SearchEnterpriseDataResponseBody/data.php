<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models\SearchEnterpriseDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $dataName;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $titlePath;
    protected $_name = [
        'dataId'    => 'DataId',
        'dataName'  => 'DataName',
        'score'     => 'Score',
        'source'    => 'Source',
        'text'      => 'Text',
        'title'     => 'Title',
        'titlePath' => 'TitlePath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->dataName) {
            $res['DataName'] = $this->dataName;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->titlePath) {
            $res['TitlePath'] = $this->titlePath;
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
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['DataName'])) {
            $model->dataName = $map['DataName'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['TitlePath'])) {
            $model->titlePath = $map['TitlePath'];
        }

        return $model;
    }
}
