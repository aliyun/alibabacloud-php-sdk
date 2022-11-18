<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class GetPublicDatasetResponseBody extends Model
{
    /**
     * @var string
     */
    public $about;

    /**
     * @var string
     */
    public $accessRequirements;

    /**
     * @var string
     */
    public $copyright;

    /**
     * @var string
     */
    public $datasetDescription;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $hostId;

    /**
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
    public $requestId;

    /**
     * @var string[]
     */
    public $tags;

    /**
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
