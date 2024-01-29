<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class GetPublicDatasetResponseBody extends Model
{
    /**
     * @example This is description about dataset.
     *
     * @var string
     */
    public $about;

    /**
     * @example This are dataset access requirements.
     *
     * @var string
     */
    public $accessRequirements;

    /**
     * @example This is dataset copyright.
     *
     * @var string
     */
    public $copyright;

    /**
     * @example This is dataset description.
     *
     * @var string
     */
    public $datasetDescription;

    /**
     * @example 西蒙斯基因组多样性计划
     *
     * @var string
     */
    public $datasetName;

    /**
     * @example easygene.cn-beijing.aliyuncs.com
     *
     * @var string
     */
    public $hostId;

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
     * @example DA980AD0-158F-44F3-847D-5EAB96C0EB6B
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @example 源站更新后及时同步
     *
     * @var string
     */
    public $updateFrequency;
    protected $_name = [
        'about'              => 'About',
        'accessRequirements' => 'AccessRequirements',
        'copyright'          => 'Copyright',
        'datasetDescription' => 'DatasetDescription',
        'datasetName'        => 'DatasetName',
        'hostId'             => 'HostId',
        'lastModified'       => 'LastModified',
        'locations'          => 'Locations',
        'requestId'          => 'RequestId',
        'tags'               => 'Tags',
        'updateFrequency'    => 'UpdateFrequency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->about) {
            $res['About'] = $this->about;
        }
        if (null !== $this->accessRequirements) {
            $res['AccessRequirements'] = $this->accessRequirements;
        }
        if (null !== $this->copyright) {
            $res['Copyright'] = $this->copyright;
        }
        if (null !== $this->datasetDescription) {
            $res['DatasetDescription'] = $this->datasetDescription;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }
        if (null !== $this->locations) {
            $res['Locations'] = $this->locations;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->updateFrequency) {
            $res['UpdateFrequency'] = $this->updateFrequency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPublicDatasetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['About'])) {
            $model->about = $map['About'];
        }
        if (isset($map['AccessRequirements'])) {
            $model->accessRequirements = $map['AccessRequirements'];
        }
        if (isset($map['Copyright'])) {
            $model->copyright = $map['Copyright'];
        }
        if (isset($map['DatasetDescription'])) {
            $model->datasetDescription = $map['DatasetDescription'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }
        if (isset($map['Locations'])) {
            if (!empty($map['Locations'])) {
                $model->locations = $map['Locations'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }
        if (isset($map['UpdateFrequency'])) {
            $model->updateFrequency = $map['UpdateFrequency'];
        }

        return $model;
    }
}
