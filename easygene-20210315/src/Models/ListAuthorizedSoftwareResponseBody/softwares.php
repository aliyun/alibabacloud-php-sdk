<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\ListAuthorizedSoftwareResponseBody;

use AlibabaCloud\Tea\Model;

class softwares extends Model
{
    /**
     * @example https://help.aliyun.com/document_detail/257750.html
     *
     * @var string
     */
    public $helpLink;

    /**
     * @example yyyy/MM/dd HH:mm:ss
     *
     * @var string
     */
    public $lastModified;

    /**
     * @var string[]
     */
    public $locations;

    /**
     * @var string
     */
    public $promotion;

    /**
     * @example 201911
     *
     * @var string
     */
    public $softwareDefaultVersion;

    /**
     * @example NGS数据二级分析软件，提供基于CPU的加速方案，可替代BWA，GATK，HaplotypeCaller，Mutect和Mutect2等分析流程。包括DNASeq，DNAScope，TNScope等工具
     *
     * @var string
     */
    public $softwareDescription;

    /**
     * @example https://img.alicdn.com/imgextra/i2/O1CN01mmZovA1UJfeKQAYvF_!!6000000002497-2-tps-256-256.png
     *
     * @var string
     */
    public $softwareIcon;

    /**
     * @example 0.15
     *
     * @var float
     */
    public $softwareLicenseFee;

    /**
     * @example Sentieon加速软件
     *
     * @var string
     */
    public $softwareLongName;

    /**
     * @example sentieon
     *
     * @var string
     */
    public $softwareName;

    /**
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
