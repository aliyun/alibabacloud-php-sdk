<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class PublicSyncAndCreateImageScanTaskRequest extends Model
{
    /**
     * @description The status of the image scan task. Valid values:
     *
     *   **INIT**: The task is being initialized.
     *   **PRE_ANALYZER**: The task is being pre-processed.
     *   **SUCCESS**: The task is successful.
     *   **FAIL**: The task failed.
     *
     * @example [{"registryType":"acr","repoId":"crr-red9kgqqi0fh75d5","instanceId":"cri-1x2qtjd75ofqvfa8","repoNamespace":"1125","regionId":"cn-hangzhou","repoName":"script1","digest":"b1064a5007786b6f82a50772858e8156bc1e5fbddb7dd20af6922761ad197fe4","tag":"v0113-ver2","createTime":1641267666666,"updateTime":1641267909090}]
     *
     * @var string
     */
    public $images;

    /**
     * @description The ID of the image scan task.
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
