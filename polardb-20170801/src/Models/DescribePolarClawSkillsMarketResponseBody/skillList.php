<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawSkillsMarketResponseBody;

use AlibabaCloud\Dara\Model;

class skillList extends Model
{
    /**
     * @var string
     */
    public $assessmentStatus;

    /**
     * @var string
     */
    public $downloadCount;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $skillVersion;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string[]
     */
    public $tagList;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'assessmentStatus' => 'AssessmentStatus',
        'downloadCount' => 'DownloadCount',
        'skillName' => 'SkillName',
        'skillVersion' => 'SkillVersion',
        'summary' => 'Summary',
        'tagList' => 'TagList',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->tagList)) {
            Model::validateArray($this->tagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assessmentStatus) {
            $res['AssessmentStatus'] = $this->assessmentStatus;
        }

        if (null !== $this->downloadCount) {
            $res['DownloadCount'] = $this->downloadCount;
        }

        if (null !== $this->skillName) {
            $res['SkillName'] = $this->skillName;
        }

        if (null !== $this->skillVersion) {
            $res['SkillVersion'] = $this->skillVersion;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->tagList) {
            if (\is_array($this->tagList)) {
                $res['TagList'] = [];
                $n1 = 0;
                foreach ($this->tagList as $item1) {
                    $res['TagList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['AssessmentStatus'])) {
            $model->assessmentStatus = $map['AssessmentStatus'];
        }

        if (isset($map['DownloadCount'])) {
            $model->downloadCount = $map['DownloadCount'];
        }

        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        if (isset($map['SkillVersion'])) {
            $model->skillVersion = $map['SkillVersion'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = [];
                $n1 = 0;
                foreach ($map['TagList'] as $item1) {
                    $model->tagList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
