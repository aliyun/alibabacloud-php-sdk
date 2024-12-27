<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DetectImageLabelsRequest extends Model
{
    /**
     * @description **If you do not have special requirements, leave this parameter empty.**
     *
     * The authorization chain. This parameter is optional. For more information, see [Use authorization chains to access resources of other entities](https://help.aliyun.com/document_detail/465340.html).
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @description The name of the project. You can obtain the name of the project from the response of the [CreateProject](https://help.aliyun.com/document_detail/478153.html) operation.
     *
     * This parameter is required.
     * @example immimagetest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The URI of the Object Storage Service (OSS) bucket in which you store the image.
     *
     * This parameter is required.
     * @example oss://imm-test/testcases/facetest.jpg
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @description The threshold of the label confidence. Labels whose confidence is lower than the specified threshold are not returned in the response. Valid values: 0 to 1. If you leave this parameter empty, the algorithm provides a default threshold.
     *
     * @example 1
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'credentialConfig' => 'CredentialConfig',
        'projectName'      => 'ProjectName',
        'sourceURI'        => 'SourceURI',
        'threshold'        => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectImageLabelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
