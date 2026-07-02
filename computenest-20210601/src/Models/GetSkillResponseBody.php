<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetSkillResponseBody\locales;

class GetSkillResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var locales[]
     */
    public $locales;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $skillDescription;

    /**
     * @var string
     */
    public $skillDisplayName;

    /**
     * @var string
     */
    public $skillId;

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
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'locales' => 'Locales',
        'requestId' => 'RequestId',
        'skillDescription' => 'SkillDescription',
        'skillDisplayName' => 'SkillDisplayName',
        'skillId' => 'SkillId',
        'skillLabels' => 'SkillLabels',
        'skillName' => 'SkillName',
        'skillSpaceId' => 'SkillSpaceId',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->locales)) {
            Model::validateArray($this->locales);
        }
        if (\is_array($this->skillLabels)) {
            Model::validateArray($this->skillLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->locales) {
            if (\is_array($this->locales)) {
                $res['Locales'] = [];
                $n1 = 0;
                foreach ($this->locales as $item1) {
                    $res['Locales'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->skillDescription) {
            $res['SkillDescription'] = $this->skillDescription;
        }

        if (null !== $this->skillDisplayName) {
            $res['SkillDisplayName'] = $this->skillDisplayName;
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
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

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Locales'])) {
            if (!empty($map['Locales'])) {
                $model->locales = [];
                $n1 = 0;
                foreach ($map['Locales'] as $item1) {
                    $model->locales[$n1] = locales::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SkillDescription'])) {
            $model->skillDescription = $map['SkillDescription'];
        }

        if (isset($map['SkillDisplayName'])) {
            $model->skillDisplayName = $map['SkillDisplayName'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
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

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
