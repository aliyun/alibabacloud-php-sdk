<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class UpdateImageRequest extends Model
{
    /**
     * @var string[]
     */
    public $adaptorIdList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $distro;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'adaptorIdList' => 'AdaptorIdList',
        'description' => 'Description',
        'distro' => 'Distro',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'language' => 'Language',
        'versionId' => 'VersionId',
        'versionName' => 'VersionName',
    ];

    public function validate()
    {
        if (\is_array($this->adaptorIdList)) {
            Model::validateArray($this->adaptorIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adaptorIdList) {
            if (\is_array($this->adaptorIdList)) {
                $res['AdaptorIdList'] = [];
                $n1 = 0;
                foreach ($this->adaptorIdList as $item1) {
                    $res['AdaptorIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->distro) {
            $res['Distro'] = $this->distro;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
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
        if (isset($map['AdaptorIdList'])) {
            if (!empty($map['AdaptorIdList'])) {
                $model->adaptorIdList = [];
                $n1 = 0;
                foreach ($map['AdaptorIdList'] as $item1) {
                    $model->adaptorIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Distro'])) {
            $model->distro = $map['Distro'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
