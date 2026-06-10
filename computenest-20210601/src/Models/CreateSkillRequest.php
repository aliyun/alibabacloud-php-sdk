<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;

class CreateSkillRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ossUrl;

    /**
     * @var string
     */
    public $skillDescription;

    /**
     * @var string[]
     */
    public $skillLabels;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $skillSpaceId;

    /**
     * @var string
     */
    public $sourceSkillId;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'ossUrl' => 'OssUrl',
        'skillDescription' => 'SkillDescription',
        'skillLabels' => 'SkillLabels',
        'skillName' => 'SkillName',
        'skillSpaceId' => 'SkillSpaceId',
        'sourceSkillId' => 'SourceSkillId',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        if (\is_array($this->skillLabels)) {
            Model::validateArray($this->skillLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
        }

        if (null !== $this->skillDescription) {
            $res['SkillDescription'] = $this->skillDescription;
        }

        if (null !== $this->skillLabels) {
            if (\is_array($this->skillLabels)) {
                $res['SkillLabels'] = [];
                $n1 = 0;
                foreach ($this->skillLabels as $item1) {
                    $res['SkillLabels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skillName) {
            $res['SkillName'] = $this->skillName;
        }

        if (null !== $this->skillSpaceId) {
            $res['SkillSpaceId'] = $this->skillSpaceId;
        }

        if (null !== $this->sourceSkillId) {
            $res['SourceSkillId'] = $this->sourceSkillId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }

        if (isset($map['SkillDescription'])) {
            $model->skillDescription = $map['SkillDescription'];
        }

        if (isset($map['SkillLabels'])) {
            if (!empty($map['SkillLabels'])) {
                $model->skillLabels = [];
                $n1 = 0;
                foreach ($map['SkillLabels'] as $item1) {
                    $model->skillLabels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        if (isset($map['SkillSpaceId'])) {
            $model->skillSpaceId = $map['SkillSpaceId'];
        }

        if (isset($map['SourceSkillId'])) {
            $model->sourceSkillId = $map['SourceSkillId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
