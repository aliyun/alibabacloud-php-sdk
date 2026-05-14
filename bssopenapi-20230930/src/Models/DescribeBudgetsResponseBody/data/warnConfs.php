<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeBudgetsResponseBody\data;

use AlibabaCloud\Dara\Model;

class warnConfs extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var bool
     */
    public $eventBridge;

    /**
     * @var string[]
     */
    public $mscChannels;

    /**
     * @var string[]
     */
    public $mscContacts;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $sequence;

    /**
     * @var string
     */
    public $thresholdType;

    /**
     * @var string
     */
    public $thresholdValue;

    /**
     * @var string
     */
    public $warnTarget;
    protected $_name = [
        'comment' => 'Comment',
        'eventBridge' => 'EventBridge',
        'mscChannels' => 'MscChannels',
        'mscContacts' => 'MscContacts',
        'name' => 'Name',
        'sequence' => 'Sequence',
        'thresholdType' => 'ThresholdType',
        'thresholdValue' => 'ThresholdValue',
        'warnTarget' => 'WarnTarget',
    ];

    public function validate()
    {
        if (\is_array($this->mscChannels)) {
            Model::validateArray($this->mscChannels);
        }
        if (\is_array($this->mscContacts)) {
            Model::validateArray($this->mscContacts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->eventBridge) {
            $res['EventBridge'] = $this->eventBridge;
        }

        if (null !== $this->mscChannels) {
            if (\is_array($this->mscChannels)) {
                $res['MscChannels'] = [];
                $n1 = 0;
                foreach ($this->mscChannels as $item1) {
                    $res['MscChannels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mscContacts) {
            if (\is_array($this->mscContacts)) {
                $res['MscContacts'] = [];
                $n1 = 0;
                foreach ($this->mscContacts as $item1) {
                    $res['MscContacts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }

        if (null !== $this->thresholdType) {
            $res['ThresholdType'] = $this->thresholdType;
        }

        if (null !== $this->thresholdValue) {
            $res['ThresholdValue'] = $this->thresholdValue;
        }

        if (null !== $this->warnTarget) {
            $res['WarnTarget'] = $this->warnTarget;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['EventBridge'])) {
            $model->eventBridge = $map['EventBridge'];
        }

        if (isset($map['MscChannels'])) {
            if (!empty($map['MscChannels'])) {
                $model->mscChannels = [];
                $n1 = 0;
                foreach ($map['MscChannels'] as $item1) {
                    $model->mscChannels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MscContacts'])) {
            if (!empty($map['MscContacts'])) {
                $model->mscContacts = [];
                $n1 = 0;
                foreach ($map['MscContacts'] as $item1) {
                    $model->mscContacts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        if (isset($map['ThresholdType'])) {
            $model->thresholdType = $map['ThresholdType'];
        }

        if (isset($map['ThresholdValue'])) {
            $model->thresholdValue = $map['ThresholdValue'];
        }

        if (isset($map['WarnTarget'])) {
            $model->warnTarget = $map['WarnTarget'];
        }

        return $model;
    }
}
