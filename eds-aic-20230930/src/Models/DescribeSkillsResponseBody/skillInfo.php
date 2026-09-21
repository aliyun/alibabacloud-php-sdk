<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSkillsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSkillsResponseBody\skillInfo\installedInstances;

class skillInfo extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $iconOssUrl;

    /**
     * @var int
     */
    public $installedCount;

    /**
     * @var installedInstances[]
     */
    public $installedInstances;

    /**
     * @var string
     */
    public $instruction;

    /**
     * @var string
     */
    public $skillId;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $skillSource;

    /**
     * @var string
     */
    public $skillStatus;

    /**
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'category' => 'Category',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'iconOssUrl' => 'IconOssUrl',
        'installedCount' => 'InstalledCount',
        'installedInstances' => 'InstalledInstances',
        'instruction' => 'Instruction',
        'skillId' => 'SkillId',
        'skillName' => 'SkillName',
        'skillSource' => 'SkillSource',
        'skillStatus' => 'SkillStatus',
        'sourceInstanceId' => 'SourceInstanceId',
        'status' => 'Status',
        'type' => 'Type',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->installedInstances)) {
            Model::validateArray($this->installedInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->iconOssUrl) {
            $res['IconOssUrl'] = $this->iconOssUrl;
        }

        if (null !== $this->installedCount) {
            $res['InstalledCount'] = $this->installedCount;
        }

        if (null !== $this->installedInstances) {
            if (\is_array($this->installedInstances)) {
                $res['InstalledInstances'] = [];
                $n1 = 0;
                foreach ($this->installedInstances as $item1) {
                    $res['InstalledInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instruction) {
            $res['Instruction'] = $this->instruction;
        }

        if (null !== $this->skillId) {
            $res['SkillId'] = $this->skillId;
        }

        if (null !== $this->skillName) {
            $res['SkillName'] = $this->skillName;
        }

        if (null !== $this->skillSource) {
            $res['SkillSource'] = $this->skillSource;
        }

        if (null !== $this->skillStatus) {
            $res['SkillStatus'] = $this->skillStatus;
        }

        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IconOssUrl'])) {
            $model->iconOssUrl = $map['IconOssUrl'];
        }

        if (isset($map['InstalledCount'])) {
            $model->installedCount = $map['InstalledCount'];
        }

        if (isset($map['InstalledInstances'])) {
            if (!empty($map['InstalledInstances'])) {
                $model->installedInstances = [];
                $n1 = 0;
                foreach ($map['InstalledInstances'] as $item1) {
                    $model->installedInstances[$n1] = installedInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Instruction'])) {
            $model->instruction = $map['Instruction'];
        }

        if (isset($map['SkillId'])) {
            $model->skillId = $map['SkillId'];
        }

        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        if (isset($map['SkillSource'])) {
            $model->skillSource = $map['SkillSource'];
        }

        if (isset($map['SkillStatus'])) {
            $model->skillStatus = $map['SkillStatus'];
        }

        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
