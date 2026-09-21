<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class CreateAgentSkillRequest extends Model
{
    /**
     * @var string[]
     */
    public $fileList;

    /**
     * @var string
     */
    public $iconKey;

    /**
     * @var string
     */
    public $packageOssKey;

    /**
     * @var string
     */
    public $skillDescription;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $skillPackageUrl;
    protected $_name = [
        'fileList' => 'FileList',
        'iconKey' => 'IconKey',
        'packageOssKey' => 'PackageOssKey',
        'skillDescription' => 'SkillDescription',
        'skillName' => 'SkillName',
        'skillPackageUrl' => 'SkillPackageUrl',
    ];

    public function validate()
    {
        if (\is_array($this->fileList)) {
            Model::validateArray($this->fileList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileList) {
            if (\is_array($this->fileList)) {
                $res['FileList'] = [];
                $n1 = 0;
                foreach ($this->fileList as $item1) {
                    $res['FileList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->iconKey) {
            $res['IconKey'] = $this->iconKey;
        }

        if (null !== $this->packageOssKey) {
            $res['PackageOssKey'] = $this->packageOssKey;
        }

        if (null !== $this->skillDescription) {
            $res['SkillDescription'] = $this->skillDescription;
        }

        if (null !== $this->skillName) {
            $res['SkillName'] = $this->skillName;
        }

        if (null !== $this->skillPackageUrl) {
            $res['SkillPackageUrl'] = $this->skillPackageUrl;
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
        if (isset($map['FileList'])) {
            if (!empty($map['FileList'])) {
                $model->fileList = [];
                $n1 = 0;
                foreach ($map['FileList'] as $item1) {
                    $model->fileList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IconKey'])) {
            $model->iconKey = $map['IconKey'];
        }

        if (isset($map['PackageOssKey'])) {
            $model->packageOssKey = $map['PackageOssKey'];
        }

        if (isset($map['SkillDescription'])) {
            $model->skillDescription = $map['SkillDescription'];
        }

        if (isset($map['SkillName'])) {
            $model->skillName = $map['SkillName'];
        }

        if (isset($map['SkillPackageUrl'])) {
            $model->skillPackageUrl = $map['SkillPackageUrl'];
        }

        return $model;
    }
}
