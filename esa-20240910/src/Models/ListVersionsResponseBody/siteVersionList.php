<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListVersionsResponseBody;

use AlibabaCloud\Dara\Model;

class siteVersionList extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $environmentNameList;

    /**
     * @var int
     */
    public $parentSiteVersion;

    /**
     * @var bool
     */
    public $readOnly;

    /**
     * @var int
     */
    public $siteVersion;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'environmentNameList' => 'EnvironmentNameList',
        'parentSiteVersion' => 'ParentSiteVersion',
        'readOnly' => 'ReadOnly',
        'siteVersion' => 'SiteVersion',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->environmentNameList)) {
            Model::validateArray($this->environmentNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->environmentNameList) {
            if (\is_array($this->environmentNameList)) {
                $res['EnvironmentNameList'] = [];
                $n1 = 0;
                foreach ($this->environmentNameList as $item1) {
                    $res['EnvironmentNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parentSiteVersion) {
            $res['ParentSiteVersion'] = $this->parentSiteVersion;
        }

        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
        }

        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnvironmentNameList'])) {
            if (!empty($map['EnvironmentNameList'])) {
                $model->environmentNameList = [];
                $n1 = 0;
                foreach ($map['EnvironmentNameList'] as $item1) {
                    $model->environmentNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ParentSiteVersion'])) {
            $model->parentSiteVersion = $map['ParentSiteVersion'];
        }

        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }

        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
