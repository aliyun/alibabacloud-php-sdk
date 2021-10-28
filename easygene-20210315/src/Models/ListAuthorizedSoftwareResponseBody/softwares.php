<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\ListAuthorizedSoftwareResponseBody;

use AlibabaCloud\Tea\Model;

class softwares extends Model
{
    /**
     * @description 帮助链接
     *
     * @var string
     */
    public $helpLink;

    /**
     * @description 最后更新时间
     *
     * @var string
     */
    public $lastModified;

    /**
     * @description 软件可用区域
     *
     * @var string[]
     */
    public $locations;

    /**
     * @description 限时免费说明
     *
     * @var string
     */
    public $promotion;

    /**
     * @description 软件默认版本
     *
     * @var string
     */
    public $softwareDefaultVersion;

    /**
     * @description 软件描述
     *
     * @var string
     */
    public $softwareDescription;

    /**
     * @description 软件图标链接
     *
     * @var string
     */
    public $softwareIcon;

    /**
     * @description 软件使用费用
     *
     * @var float
     */
    public $softwareLicenseFee;

    /**
     * @description 软件长名称
     *
     * @var string
     */
    public $softwareLongName;

    /**
     * @description 软件名称
     *
     * @var string
     */
    public $softwareName;

    /**
     * @description 软件所有版本
     *
     * @var string[]
     */
    public $softwareVersions;
    protected $_name = [
        'helpLink'               => 'HelpLink',
        'lastModified'           => 'LastModified',
        'locations'              => 'Locations',
        'promotion'              => 'Promotion',
        'softwareDefaultVersion' => 'SoftwareDefaultVersion',
        'softwareDescription'    => 'SoftwareDescription',
        'softwareIcon'           => 'SoftwareIcon',
        'softwareLicenseFee'     => 'SoftwareLicenseFee',
        'softwareLongName'       => 'SoftwareLongName',
        'softwareName'           => 'SoftwareName',
        'softwareVersions'       => 'SoftwareVersions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->helpLink) {
            $res['HelpLink'] = $this->helpLink;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }
        if (null !== $this->locations) {
            $res['Locations'] = $this->locations;
        }
        if (null !== $this->promotion) {
            $res['Promotion'] = $this->promotion;
        }
        if (null !== $this->softwareDefaultVersion) {
            $res['SoftwareDefaultVersion'] = $this->softwareDefaultVersion;
        }
        if (null !== $this->softwareDescription) {
            $res['SoftwareDescription'] = $this->softwareDescription;
        }
        if (null !== $this->softwareIcon) {
            $res['SoftwareIcon'] = $this->softwareIcon;
        }
        if (null !== $this->softwareLicenseFee) {
            $res['SoftwareLicenseFee'] = $this->softwareLicenseFee;
        }
        if (null !== $this->softwareLongName) {
            $res['SoftwareLongName'] = $this->softwareLongName;
        }
        if (null !== $this->softwareName) {
            $res['SoftwareName'] = $this->softwareName;
        }
        if (null !== $this->softwareVersions) {
            $res['SoftwareVersions'] = $this->softwareVersions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return softwares
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HelpLink'])) {
            $model->helpLink = $map['HelpLink'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }
        if (isset($map['Locations'])) {
            if (!empty($map['Locations'])) {
                $model->locations = $map['Locations'];
            }
        }
        if (isset($map['Promotion'])) {
            $model->promotion = $map['Promotion'];
        }
        if (isset($map['SoftwareDefaultVersion'])) {
            $model->softwareDefaultVersion = $map['SoftwareDefaultVersion'];
        }
        if (isset($map['SoftwareDescription'])) {
            $model->softwareDescription = $map['SoftwareDescription'];
        }
        if (isset($map['SoftwareIcon'])) {
            $model->softwareIcon = $map['SoftwareIcon'];
        }
        if (isset($map['SoftwareLicenseFee'])) {
            $model->softwareLicenseFee = $map['SoftwareLicenseFee'];
        }
        if (isset($map['SoftwareLongName'])) {
            $model->softwareLongName = $map['SoftwareLongName'];
        }
        if (isset($map['SoftwareName'])) {
            $model->softwareName = $map['SoftwareName'];
        }
        if (isset($map['SoftwareVersions'])) {
            if (!empty($map['SoftwareVersions'])) {
                $model->softwareVersions = $map['SoftwareVersions'];
            }
        }

        return $model;
    }
}
