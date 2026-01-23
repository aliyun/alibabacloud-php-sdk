<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetSecurityLevelResponseBody;

use AlibabaCloud\Dara\Model;

class securityLevelInfo extends Model
{
    /**
     * @var string
     */
    public $abbreviation;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int[]
     */
    public $relatedClassifyIdList;
    protected $_name = [
        'abbreviation' => 'Abbreviation',
        'description' => 'Description',
        'index' => 'Index',
        'name' => 'Name',
        'relatedClassifyIdList' => 'RelatedClassifyIdList',
    ];

    public function validate()
    {
        if (\is_array($this->relatedClassifyIdList)) {
            Model::validateArray($this->relatedClassifyIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abbreviation) {
            $res['Abbreviation'] = $this->abbreviation;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->relatedClassifyIdList) {
            if (\is_array($this->relatedClassifyIdList)) {
                $res['RelatedClassifyIdList'] = [];
                $n1 = 0;
                foreach ($this->relatedClassifyIdList as $item1) {
                    $res['RelatedClassifyIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Abbreviation'])) {
            $model->abbreviation = $map['Abbreviation'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RelatedClassifyIdList'])) {
            if (!empty($map['RelatedClassifyIdList'])) {
                $model->relatedClassifyIdList = [];
                $n1 = 0;
                foreach ($map['RelatedClassifyIdList'] as $item1) {
                    $model->relatedClassifyIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
