<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\PublishStandardRequest;

use AlibabaCloud\Dara\Model;

class publishCommand extends Model
{
    /**
     * @var bool
     */
    public $autoPublishAfterApproval;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $reviewerIdList;

    /**
     * @var string
     */
    public $standardStage;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'autoPublishAfterApproval' => 'AutoPublishAfterApproval',
        'comment' => 'Comment',
        'id' => 'Id',
        'reviewerIdList' => 'ReviewerIdList',
        'standardStage' => 'StandardStage',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->reviewerIdList)) {
            Model::validateArray($this->reviewerIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPublishAfterApproval) {
            $res['AutoPublishAfterApproval'] = $this->autoPublishAfterApproval;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->reviewerIdList) {
            if (\is_array($this->reviewerIdList)) {
                $res['ReviewerIdList'] = [];
                $n1 = 0;
                foreach ($this->reviewerIdList as $item1) {
                    $res['ReviewerIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->standardStage) {
            $res['StandardStage'] = $this->standardStage;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AutoPublishAfterApproval'])) {
            $model->autoPublishAfterApproval = $map['AutoPublishAfterApproval'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ReviewerIdList'])) {
            if (!empty($map['ReviewerIdList'])) {
                $model->reviewerIdList = [];
                $n1 = 0;
                foreach ($map['ReviewerIdList'] as $item1) {
                    $model->reviewerIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StandardStage'])) {
            $model->standardStage = $map['StandardStage'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
