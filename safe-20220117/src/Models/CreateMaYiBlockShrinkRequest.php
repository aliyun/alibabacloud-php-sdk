<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\CreateMaYiBlockShrinkRequest\blockTimes;

class CreateMaYiBlockShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $blockId;

    /**
     * @var blockTimes[]
     */
    public $blockTimes;

    /**
     * @var string
     */
    public $blockType;

    /**
     * @var string
     */
    public $creatorEmpId;

    /**
     * @var string[]
     */
    public $director;

    /**
     * @var string
     */
    public $faultVersion;

    /**
     * @var string[]
     */
    public $information;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $scopeShrink;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'blockId' => 'BlockId',
        'blockTimes' => 'BlockTimes',
        'blockType' => 'BlockType',
        'creatorEmpId' => 'CreatorEmpId',
        'director' => 'Director',
        'faultVersion' => 'FaultVersion',
        'information' => 'Information',
        'reason' => 'Reason',
        'scopeShrink' => 'Scope',
        'title' => 'Title',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->blockTimes)) {
            Model::validateArray($this->blockTimes);
        }
        if (\is_array($this->director)) {
            Model::validateArray($this->director);
        }
        if (\is_array($this->information)) {
            Model::validateArray($this->information);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockId) {
            $res['BlockId'] = $this->blockId;
        }

        if (null !== $this->blockTimes) {
            if (\is_array($this->blockTimes)) {
                $res['BlockTimes'] = [];
                $n1 = 0;
                foreach ($this->blockTimes as $item1) {
                    $res['BlockTimes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->blockType) {
            $res['BlockType'] = $this->blockType;
        }

        if (null !== $this->creatorEmpId) {
            $res['CreatorEmpId'] = $this->creatorEmpId;
        }

        if (null !== $this->director) {
            if (\is_array($this->director)) {
                $res['Director'] = [];
                $n1 = 0;
                foreach ($this->director as $item1) {
                    $res['Director'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->faultVersion) {
            $res['FaultVersion'] = $this->faultVersion;
        }

        if (null !== $this->information) {
            if (\is_array($this->information)) {
                $res['Information'] = [];
                $n1 = 0;
                foreach ($this->information as $item1) {
                    $res['Information'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->scopeShrink) {
            $res['Scope'] = $this->scopeShrink;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BlockId'])) {
            $model->blockId = $map['BlockId'];
        }

        if (isset($map['BlockTimes'])) {
            if (!empty($map['BlockTimes'])) {
                $model->blockTimes = [];
                $n1 = 0;
                foreach ($map['BlockTimes'] as $item1) {
                    $model->blockTimes[$n1] = blockTimes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BlockType'])) {
            $model->blockType = $map['BlockType'];
        }

        if (isset($map['CreatorEmpId'])) {
            $model->creatorEmpId = $map['CreatorEmpId'];
        }

        if (isset($map['Director'])) {
            if (!empty($map['Director'])) {
                $model->director = [];
                $n1 = 0;
                foreach ($map['Director'] as $item1) {
                    $model->director[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FaultVersion'])) {
            $model->faultVersion = $map['FaultVersion'];
        }

        if (isset($map['Information'])) {
            if (!empty($map['Information'])) {
                $model->information = [];
                $n1 = 0;
                foreach ($map['Information'] as $item1) {
                    $model->information[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Scope'])) {
            $model->scopeShrink = $map['Scope'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
