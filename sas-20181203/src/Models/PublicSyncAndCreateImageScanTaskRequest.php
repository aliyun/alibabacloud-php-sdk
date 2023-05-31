<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class PublicSyncAndCreateImageScanTaskRequest extends Model
{
    /**
     * @description The information about the images. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **RegistryType**: the type of the image repository. Valid values:
     *
     *   acr
     *   harbor
     *   quay
     *
     *   **RepoId**: the ID of the image repository.
     *
     *   **InstanceId**: the ID of the Container Registry instance to which the image repository belongs.
     *
     *   **RepoNamespace**: the namespace to which the image repository belongs.
     *
     *   **RegionId**: the region ID of the image.
     *
     *   **RepoName**: the name of the image repository.
     *
     *   **Digest**: the digest of the image.
     *
     *   **Tag**: the tag that is added to the image.
     *
     *   **CreateTime**: the timestamp when the image was created. Unit: milliseconds.
     *
     *   **UpdateTime**: the timestamp when the image was updated. Unit: milliseconds.
     *
     * @example [{"registryType":"acr","repoId":"crr-red9kgqqi0fh75d5","instanceId":"cri-1x2qtjd75ofqvfa8","repoNamespace":"1125","regionId":"cn-hangzhou","repoName":"script1","digest":"b1064a5007786b6f82a50772858e8156bc1e5fbddb7dd20af6922761ad197fe4","tag":"v0113-ver2","createTime":1641267666666,"updateTime":1641267909090}]
     *
     * @var string
     */
    public $images;

    /**
     * @description The source IP address of the request.
     *
     * @example 1.2.X.X
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'images'   => 'Images',
        'sourceIp' => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->images) {
            $res['Images'] = $this->images;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublicSyncAndCreateImageScanTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Images'])) {
            $model->images = $map['Images'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
